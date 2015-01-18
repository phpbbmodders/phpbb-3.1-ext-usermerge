<?php
/**
 *
 *===================================================================
 *
 *  User Merge -- ACP Module File
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
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_USER_MERGE'		=> 'User Merge',
	'VERSION' 			=> 'Version',
	'LOG_USERS_MERGED'	=> '<strong>Merged users</strong><br />%s',
	'NO_USER'					=> 'A specified user for merging could not be located within the database.',
	'NO_USER_SPECIFIED'			=> 'A user for merging was not specified.',
	'CANNOT_MERGE_SELF'			=> 'You are trying to delete yourself.',
	'CANNOT_MERGE_FOUNDER'		=> 'Founders can only be deleted by other founders.',
	'CANNOT_MERGE_SAME'			=> 'You cannot merge the user account <strong>%s</strong> with itself.',

	'USERS_MERGED'				=> 'The specified users were successfully merged.',
	'MERGE_USERS'				=> 'Merge Users',
	'MERGE_USERS_CONFIRM'		=> 'Are you sure you wish to merge these users?<br /><strong>%s will be deleted, there is no return after this.</strong>',
	'ACP_USER_MERGE_TITLE'		=> 'Merge Users',
	'ACP_USER_MERGE_EXPLAIN'	=> 'Here you can merge two users into one user.  Please note that the old user will be deleted and only the content made by that user will be transferred to the new user.',

//	'LOG_USERS_MERGED'	=> '<strong>Merged users</strong>',

	'OLD_USER'					=> 'Old username',
	'OLD_USER_EXPLAIN'			=> 'The old user that is to be merged.  Beware, this user will be deleted upon merge.',
	'NEW_USER'					=> 'New username',
	'NEW_USER_EXPLAIN'			=> 'The new user that the other user should be merged into.  This user must already exist.',
));
