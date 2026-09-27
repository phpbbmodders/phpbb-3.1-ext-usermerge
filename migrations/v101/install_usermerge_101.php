<?php
/**
 *
 * User Merge extension for the phpBB Forum Software package
 *
 * @copyright (c) 2017 RMcGirr83
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\usermerge\migrations\v101;

class install_usermerge_101 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbbmodders\usermerge\migrations\v10\install_usermerge');
	}

	public function update_data()
	{
		return array(
			array('config.remove', array('usermerge_version')),
		);
	}
}
