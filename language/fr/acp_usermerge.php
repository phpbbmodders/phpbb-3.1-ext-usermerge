<?php
/**
*
* User Merge extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 RMcGirr83 (Rich McGirr) rmcgirr83@rmcgirr83.org & Jari Kanerva (tumba25) <http://www.phpbbmodders.net>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
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
	'VERSION' 			=> 'Version',
	'LOG_USERS_MERGED'	=> '<strong>Utilisateurs fusionnés</strong><br />%s',
	'NO_USER_FOR_MERGE'					=> 'Un utilisateur spécifié pour la fusion n’est peut-être pas situé dans la base de données.',
	'NO_USER_SPECIFIED'			=> 'Un utilisateur pour la fusion n’a pas été spécifié.',
	'CANNOT_MERGE_SELF'			=> 'Il est impossible de supprimer votre compte.',
	'CANNOT_MERGE_FOUNDER'		=> 'Les fondateurs ne peuvent être supprimés par d’autres fondateurs.',
	'CANNOT_MERGE_SAME'			=> 'Le compte utilisateur <strong>%s</strong> ne peut être fusionné avec lui-même.',

	'USERS_MERGED'				=> 'Les utilisateurs spécifiés ont été fusionnés avec succès.',
	'MERGE_USERS'				=> 'Fusionner des utilisateurs',
	'MERGE_USERS_CONFIRM'		=> 'Confirmer la fusion de ces utilisateurs ?<br /><strong>%s sera supprimé, une fois la fusion réalisée il n’est pas possible d’annuler cette action.</strong>',
	'ACP_USER_MERGE_TITLE'		=> 'Fusionner des utilisateurs',
	'ACP_USER_MERGE_EXPLAIN'	=> 'Sur cette page il est possible de fusionner deux utilisateurs en un utilisateur. Merci de noter que l’ancien utilisateur sera supprimé et que seul son contenu sera transféré au nouvel utilisateur.',

	'OLD_USER'					=> 'Ancien nom d’utilisateur',
	'OLD_USER_EXPLAIN'			=> 'Permet de saisir le nom d’utilisateur devant être fusionné. Attention, cet utilisateur sera supprimé lors de la fusion.',
	'NEW_USER'					=> 'Nouveau nom d’utilisateur',
	'NEW_USER_EXPLAIN'			=> 'Permet de saisir le nom d’utilisateur dans lequel l’ancien utilisateur doit être fusionné. Cet utilisateur doit déjà exister.',
));
