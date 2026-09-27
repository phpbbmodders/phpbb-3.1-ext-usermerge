<?php
/**
 *
 * User Merge extension for the phpBB Forum Software package
 *
 * @copyright (c) 2014 RMcGirr83
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\usermerge\acp;

/**
* @package module_install
*/
class usermerge_info
{
	function module()
	{
		return array(
			'filename'	=> 'phpbbmodders\usermerge\acp\usermerge_module',
			'title'		=> 'ACP_USER_MERGE',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'main'	=> array('title' => 'ACP_USER_MERGE', 'auth'	=> 'ext_phpbbmodders/usermerge && acl_a_user', 'cat'	=> array('ACP_CAT_USERS')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
