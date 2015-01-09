<?php
/**
*
* @package ACP User Merge
* @copyright (c) 2014 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
