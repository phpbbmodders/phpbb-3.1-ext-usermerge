<?php
/**
*
* @package User Merge
* @copyright (c) 2017 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
