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
