<?php
/**
*
* @package User Merge
* @copyright (c) 2014 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace phpbbmodders\usermerge\acp;

class usermerge_module
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\log\log */
	protected $log;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var ContainerInterface */
	protected $phpbb_container;

	/** @var string */
	protected $phpbb_root_path;

	/** @var string */
	protected $php_ext;

	/** @var string */
	public $u_action;

	public function main($id, $mode)
	{

		global $config, $db, $request, $template, $user, $phpbb_root_path, $phpEx, $phpbb_container;

		$this->config = $config;
		$this->db = $db;
		$this->log = $phpbb_container->get('log');
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $phpEx;

		// Add the pages ACP lang file
		$this->user->add_lang_ext('phpbbmodders/usermerge', 'acp_usermerge');

		// Load a template from adm/style for our ACP page
		$this->tpl_name = 'acp_usermerge';

		// Set the page title for our ACP page
		$this->page_title = 'ACP_USER_MERGE';

		// Quick var-checking and var setup.
		$action	= $this->request->variable('action', '');
		$merge = ($action == 'merge') ? true : false;

		$errors = array();

		$old_username	= $this->request->variable('old_username', '', true);
		$new_username	= $this->request->variable('new_username', '', true);

		$form_key = 'acp_user_merge';
		add_form_key($form_key);

		// Hath we an invalid form key?
		if ($this->request->is_set_post('submit') && !check_form_key($form_key))
		{
			$errors[] = $user->lang['FORM_INVALID'];
		}

		if ($this->request->is_set_post('submit') || $merge)
		{
			$old_user_id = $this->check_user($old_username, $errors, true);
			$new_user_id = $this->check_user($new_username, $errors, false);
		}

		// Make sure we have submitted the form, and that we do not have errors
		if (($this->request->is_set_post('submit') || $merge) && !sizeof($errors))
		{
			if ($old_user_id == $new_user_id)
			{
				$warning = sprintf($this->user->lang['CANNOT_MERGE_SAME'], $old_username);
				trigger_error($warning . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// Have we confirmed this change?
			if (confirm_box(true))
			{
				// Let's roll!
				$this->user_merge($old_user_id, $new_user_id);

				$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_USERS_MERGED', time(), array($old_username . ' &raquo; ' . $new_username));

				trigger_error($this->user->lang['USERS_MERGED'] . adm_back_link($this->u_action));
			}
			else
			{
				$hidden_fields = array(
					'i'					=> $id,
					'mode'				=> $mode,
					'old_username'		=> $old_username,
					'new_username'		=> $new_username,
					'action'	=> 'merge',
				);

				// Be annoying.  Are you suuuuuuuuuuuure?  No, really, are you sure?
				$merge_users_confirm = sprintf($this->user->lang['MERGE_USERS_CONFIRM'], $old_username);
				confirm_box(false, $merge_users_confirm, build_hidden_fields($hidden_fields));
			}
		}

		$user_merge_version = !empty($this->config['usermerge_version']) ? $this->config['usermerge_version'] : '';
		// Assign template stuffs now.
		$this->page_title = $this->user->lang['ACP_USER_MERGE_TITLE'];

		$template->assign_vars(array(
			'S_ERROR'					=> (sizeof($errors)) ? true : false,
			'ERROR_MSG'					=> implode('<br />', $errors),
			'USER_MERGE_VERSION'		=> $user_merge_version,
			'U_FIND_OLD_USERNAME'		=> append_sid("{$this->phpbb_root_path}memberlist.$this->php_ext", 'mode=searchuser&amp;form=user_merge&amp;field=old_username&amp;select_single=true'),
			'U_FIND_NEW_USERNAME'		=> append_sid("{$this->phpbb_root_path}memberlist.$this->php_ext", 'mode=searchuser&amp;form=user_merge&amp;field=new_username&amp;select_single=true'),
			'OLD_USERNAME'				=> (!empty($old_user_id)) ? $old_username : '',
			'NEW_USERNAME'				=> (!empty($new_user_id)) ? $new_username : '',

			'L_TITLE'					=> $this->user->lang['ACP_USER_MERGE_TITLE'],
			'L_EXPLAIN'					=> $this->user->lang['ACP_USER_MERGE_EXPLAIN'],
			'USERMERGE_VERSION'			=> $user_merge_version,
			'U_ACTION'					=> $this->u_action,
		));
	}

	/**
	 * Checks to see if we can use this username for a merge, based on a few factors.
	 *
	 * @param string $username - The username to check
	 * @param array &$errors - Errors array to work with
	 * @return mixed - Return the user's ID (integer) if valid, return void if there was an error
	 */
	private function check_user($username, &$errors, $old_user)
	{
		// Grabbeth the old user's ID
		if (!empty($username))
		{
			$sql = 'SELECT user_id, user_type
				FROM ' . USERS_TABLE . "
				WHERE username_clean = '" . $this->db->sql_escape(utf8_clean_string($username)) . "'";
			$result = $this->db->sql_query($sql);
			$user_id = (int) $this->db->sql_fetchfield('user_id');
			$user_type = (int) $this->db->sql_fetchfield('user_type');
			$this->db->sql_freeresult($result);

			// No such user.  o_0
			if (!$user_id)
			{
				$errors[] = $this->user->lang['NO_USER'];
				return;
			}
		}
		else
		{
			$errors[] = $this->user->lang['NO_USER_SPECIFIED'];
			return;
		}

		// Check to see if it is ourselves here
		if ($user_id === (int) $this->user->data['user_id'] && $old_user)
		{
			$errors[] = $this->user->lang['CANNOT_MERGE_SELF'];
			return;
		}

		// Make sure we aren't messing with a founder
		if ($user_type === USER_FOUNDER && $old_user && $this->user->data['user_type'] !== USER_FOUNDER)
		{
			$errors[] = $this->user->lang['CANNOT_MERGE_FOUNDER'];
			return;
		}

		return $user_id;
	}

	/**
	 * Merge two user accounts into one
	 *
	 * @author eviL3
	 * @param int $old_user User id of the old user
	 * @param int $new_user User id of the new user
	 *
	 * @return void
	 */
	private function user_merge($old_user, $new_user)
	{
		if (!function_exists('user_add'))
		{
			include($this->phpbb_root_path . 'includes/functions_user.' . $this->php_ext);
		}

		$old_user = (int) $old_user;
		$new_user = (int) $new_user;

		// Update postcount
		$total_posts = 0;

		// Add up the total number of posts for both...
		$sql = 'SELECT user_posts
			FROM ' . USERS_TABLE . '
			WHERE ' . $this->db->sql_in_set('user_id', array($old_user, $new_user));
		$result = $this->db->sql_query($sql);
		while ($return = $this->db->sql_fetchrow($result))
		{
			$total_posts = $total_posts + (int) $return['user_posts'];
		}
		$this->db->sql_freeresult($result);

		// Now set the new user to have the total amount of posts.  ;)
		$this->db->sql_query('UPDATE ' . USERS_TABLE . ' SET ' . $this->db->sql_build_array('UPDATE', array(
			'user_posts' => $total_posts,
		)) . ' WHERE user_id = ' . $new_user);

		// Get both users userdata
		$data = array();
		foreach (array($old_user, $new_user) as $key)
		{
			$sql = 'SELECT user_id, username, user_colour
				FROM ' . USERS_TABLE . '
					WHERE user_id = ' . $key;
			$result = $this->db->sql_query($sql);
			$data[$key] = $this->db->sql_fetchrow($result);
			$this->db->sql_freeresult($result);
		}

		$update_ary = array(
			ATTACHMENTS_TABLE		=> array('poster_id'),
			FORUMS_TABLE			=> array(array('forum_last_poster_id', 'forum_last_poster_name', 'forum_last_poster_colour')),
			LOG_TABLE				=> array('user_id', 'reportee_id'),
			MODERATOR_CACHE_TABLE	=> array(array('user_id', 'username')),
			POSTS_TABLE				=> array(array('poster_id', 'post_username'), 'post_edit_user'),
			POLL_VOTES_TABLE		=> array('vote_user_id'),
			PRIVMSGS_TABLE			=> array('author_id', 'message_edit_user'),
			PRIVMSGS_FOLDER_TABLE	=> array('user_id'),
			PRIVMSGS_RULES_TABLE	=> array('user_id', 'rule_user_id'),
			PRIVMSGS_TO_TABLE		=> array('user_id', 'author_id'),
			REPORTS_TABLE			=> array('user_id'),
			TOPICS_TABLE			=> array(array('topic_poster', 'topic_first_poster_name', 'topic_first_poster_colour'), array('topic_last_poster_id', 'topic_last_poster_name', 'topic_last_poster_colour')),
			NOTIFICATIONS_TABLE		=> array('user_id'),
		);

		foreach ($update_ary as $table => $field_ary)
		{
			foreach ($field_ary as $field)
			{
				$sql_ary = array();

				if (!is_array($field))
				{
					$field = array($field);
				}

				$sql_ary[$field[0]] = $new_user;

				if (!empty($field[1]))
				{
					$sql_ary[$field[1]] = $data[$new_user]['username'];
				}

				if (!empty($field[2]))
				{
					$sql_ary[$field[2]] = $data[$new_user]['user_colour'];
				}

				$primary_field = $field[0];

				$sql = "UPDATE $table SET " . $this->db->sql_build_array('UPDATE', $sql_ary) . "
					WHERE $primary_field = $old_user";
				$this->db->sql_query($sql);
			}
		}

		// We need to handle PM to_address and bcc_address separately.
		$u_old_user = "u_$old_user"; // $old_user is casted to int somewhere around line 202 and not changed after that.
		$u_new_user = "u_$new_user";
		$sql = 'SELECT msg_id, to_address, bcc_address FROM ' . PRIVMSGS_TABLE . "
				WHERE to_address LIKE '%$u_old_user%'
					OR bcc_address LIKE '%$u_old_user%'";
		$result	= $this->db->sql_query($sql);
		$rowset	= $this->db->sql_fetchrowset($result);
		$this->db->sql_freeresult($result);

		foreach ($rowset as $row)
		{
			$sql_ary = array();
			// A user should no be able to be in both to_address and bcc_address.
			// But someone might have been messing with the DB.
			if (strpos($row['to_address'], $u_old_user) !== false)
			{
				$sql_ary['to_address'] = $this->replace_recipients($u_old_user, $u_new_user, $row['to_address']);
			}

			if (strpos($row['bcc_address'], $u_old_user) !== false)
			{
				$sql_ary['bcc_address'] = $this->replace_recipients($u_old_user, $u_new_user, $row['bcc_address']);
			}

			// The query above will catch more than is wanted.
			// Search for user id 5 will also return user ids 50-59 and 500-599 and so on.
			if (!empty($sql_ary))
			{
				$sql = 'UPDATE ' . PRIVMSGS_TABLE . '
						SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
						WHERE msg_id = ' . (int) $row['msg_id'];
				$this->db->sql_query_limit($sql, 1);
			}
		}

		user_delete('remove', $old_user);
	}

	/**
	 * Replaces the old recipient id with the new one.
	 *
	 * @param str $u_old_user,	'u_' . old user id
	 * @param str $u_new_user,	'u_' . new user id
	 * @param str $id_string,	string with 'to_address' or 'bcc_address' directly from the DB.
	 */
	private function replace_recipients($u_old_user, $u_new_user, $id_string)
	{
		$recipients = explode(':', $id_string);

		foreach ($recipients as &$recipient)
		{
			if ($recipient == $u_old_user)
			{
				$recipient = $u_new_user;
			}
		}
		unset($recipient);

		$return = implode(':', $recipients);
		return($return);
	}
}
