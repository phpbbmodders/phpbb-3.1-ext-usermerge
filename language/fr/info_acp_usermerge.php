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
	'ACP_USER_MERGE'		=> 'Fusion d’utilisateurs',
	'VERSION' 			=> 'Version',
	'LOG_USERS_MERGED'	=> '<strong>Utilisateurs fusionnés</strong><br />%s',
	'NO_USER'					=> 'Un utilisateur défini pour la fusion est introuvable dans la base de données.',
	'NO_USER_SPECIFIED'			=> 'Un utilisateur à fusionner n’a pas été défini.',
	'CANNOT_MERGE_SELF'			=> 'Vous tentez de vous suprimer vous-même.',
	'CANNOT_MERGE_FOUNDER'		=> 'Les fondateurs ne peuvent être supprimés que par d’autres fondateurs.',

	'USERS_MERGED'				=> 'Les utilisateurs définis ont été fusionnés avec succès.',
	'MERGE_USERS'				=> 'Fusionner les utilisateurs',
	'MERGE_USERS_CONFIRM'		=> 'Êtes-vous sûr(e) de vouloir fusionner ces utilisateurs&nbsp;?',
	'ACP_USER_MERGE_TITLE'		=> 'Fusionner les utilisateurs',
	'ACP_USER_MERGE_EXPLAIN'	=> 'Voici la page où vous pouvez fusionner deux utilisateurs en un seul.  Veuillez noter que le plus ancien utilisateur sera supprimé et seul le contenu créé par cet utilisateur sera transféré au nouvel utilisateur.',

//	'LOG_USERS_MERGED'	=> '<strong>Utilisateurs fusionnés</strong>',

	'OLD_USER'					=> 'Ancien nom d’utilisateur',
	'OLD_USER_EXPLAIN'			=> 'L’ancien utilisateur à devoir être fusionné.  Attention, cet utilisateur sera supprimé par la fusion.',
	'NEW_USER'					=> 'Nouveau nom d’utilisateur',
	'NEW_USER_EXPLAIN'			=> 'Le nouvel utilisateur auquel l’autre doit être fusionné.  Cet utilisateur doit déjà exister.',
));
