<?php
/**
 *
 * User Merge extension for the phpBB Forum Software package
 *
 * @copyright (c) 2015 RMcGirr83
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\usermerge\migrations\v10;

class install_usermerge extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['usermerge_version']) && version_compare($this->config['usermerge_version'], '1.0.0', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\gold');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('usermerge_version', '1.0.0')),

			array('module.add', array(
				'acp',
				'ACP_CAT_USERS',
				array(
					'module_basename'	=> '\phpbbmodders\usermerge\acp\usermerge_module',
					'auth'				=> 'ext_phpbbmodders/usermerge && acl_a_user',
					'modes'				=> array('main'),
				),
			)),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('usermerge_version')),

			array('module.remove', array(
				'acp',
				'ACP_CAT_USERS',
				array(
					'module_basename'	=> '\phpbbmodders\usermerge\acp\usermerge_module',
				),
			)),
		);
	}
}
