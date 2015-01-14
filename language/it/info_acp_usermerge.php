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
 * Package:		Language [it]
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
	'ACP_USER_MERGE'		=> 'Unisci utenti',
	'VERSION' 			=> 'Versione',
	'LOG_USERS_MERGED'	=> '<strong>Utenti uniti</strong><br />%s',
	'NO_USER'					=> 'Uno degli utenti specificati non è presente nel database.',
	'NO_USER_SPECIFIED'			=> 'Non è stato indicato uno degli utenti da unire.',
	'CANNOT_MERGE_SELF'			=> 'Non è possibile cancellare il proprio utente.',
	'CANNOT_MERGE_FOUNDER'		=> 'I fondatori possono essere cancellati solo da altri fondatori.',

	'USERS_MERGED'				=> 'Gli utenti indicati sono stati uniti.',
	'MERGE_USERS'				=> 'Unisci utenti',
	'MERGE_USERS_CONFIRM'		=> 'Sei sicuro di voler unire questi utenti?',
	'ACP_USER_MERGE_TITLE'		=> 'Unisci utenti',
	'ACP_USER_MERGE_EXPLAIN'	=> 'Qui è possibile unire due utenti in uno. Notare che il vecchio utente sarà cancellato e solo i suoi contenuti saranno trasferiti al nuovo utente indicato.',

//	'LOG_USERS_MERGED'	=> '<strong>Utenti uniti</strong>',

	'OLD_USER'					=> 'Vecchio nome utente',
	'OLD_USER_EXPLAIN'			=> 'The old user that is to be merged.  Beware, this user will be deleted upon merge.',
	'NEW_USER'					=> 'Nuovo nome utente',
	'NEW_USER_EXPLAIN'			=> 'The new user that the other user should be merged into.  This user must already exist.',
));
