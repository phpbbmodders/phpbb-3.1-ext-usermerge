<?php
/**
 *
 *===================================================================
 *
 *  User Merge -- Language File
 *-------------------------------------------------------------------
 *	Script info:
 * Version:		1.2.0
 * Copyright:	(c) 2009 - phpBBModders.net
 * License:		http://opensource.org/licenses/gpl-license.php | GNU Public License v2
 * Package:		Language [en]
 *
 *===================================================================
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'NO_USER'								=> 'A specified user for merging could not be located within the database.',
	'NO_USER_SPECIFIED'			=> 'A user for merging was not specified.',
	'CANNOT_MERGE_SELF'			=> 'You are trying to delete yourself.',
	'CANNOT_MERGE_FOUNDER'	=> 'Founders can only be deleted by other founders.',

	'USERS_MERGED'						=> 'The specified users were successfully merged.',
	'MERGE_USERS'							=> 'Merge Users',
	'MERGE_USERS_CONFIRM'			=> 'Are you sure you wish to merge these users?',
	'ACP_USER_MERGE_TITLE'		=> 'Merge Users',
	'ACP_USER_MERGE_EXPLAIN'	=> 'Here you can merge a multiple users into one user.  Please note that the old user will be deleted and only the content made by that user will be transferred to the new user.',

//	'LOG_USERS_MERGED'	=> '<strong>Merged users</strong>',

	'OLD_USER'					=> 'Old username',
	'OLD_USER_EXPLAIN'	=> 'The old user that is to be merged.  Beware, this user will be deleted upon merge.',
	'NEW_USER'					=> 'New username',
	'NEW_USER_EXPLAIN'	=> 'The new user that the other user should be merged into.  This user must already exist.',
));
?>
