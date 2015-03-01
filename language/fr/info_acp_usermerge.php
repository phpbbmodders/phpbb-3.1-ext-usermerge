<?php
 /**
 *
 * @package phpBB Extension - User Merge
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org & Jari Kanerva (tumba25)
 * @copyright (c) 2014 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 * @translated into French by Galixte (http://www.galixte.com)
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
	'ACP_USER_MERGE'		=> 'Fusion d’utilisateur',
	'VERSION' 			=> 'Version',
	'LOG_USERS_MERGED'	=> '<strong>Utilisateurs fusionnés</strong><br />%s',
	'NO_USER'					=> 'Un utilisateur spécifié pour la fusion n’est peut-être pas situé dans la base de données.',
	'NO_USER_SPECIFIED'			=> 'Un utilisateur pour la fusion n’a pas été spécifié.',
	'CANNOT_MERGE_SELF'			=> 'Vous essayez de vous supprimer.',
	'CANNOT_MERGE_FOUNDER'		=> 'Les fondateurs ne peuvent être supprimés par d’autres fondateurs.',
	'CANNOT_MERGE_SAME'			=> 'Vous ne pouvez pas fusionner le compte utilisateur <strong>%s</strong> avec lui-même.',

	'USERS_MERGED'				=> 'Les utilisateurs spécifiés ont été fusionnés avec succès.',
	'MERGE_USERS'				=> 'Fusionner des utilisateurs',
	'MERGE_USERS_CONFIRM'		=> 'Êtes-vous sûr de vouloir fusionner ces utilisateurs ?<br /><strong>%s sera supprimé, une fois la fusion réalisée on ne peut pas revenir en arrière.</strong>',
	'ACP_USER_MERGE_TITLE'		=> 'Fusionner des utilisateurs',
	'ACP_USER_MERGE_EXPLAIN'	=> 'Ici vous pouvez fusionner deux utilisateurs en un utilisateur. Veuillez noter que l’ancien utilisateur sera supprimé et que seul son contenu sera transféré au nouvel utilisateur.',

//	'LOG_USERS_MERGED'	=> '<strong>Utilisateurs fusionnés</strong>',

	'OLD_USER'					=> 'Ancien nom d’utilisateur',
	'OLD_USER_EXPLAIN'			=> 'Ancien utilisateur qui doit être fusionné. Faites attention, cet utilisateur sera supprimé lors de la fusion.',
	'NEW_USER'					=> 'Nouveau nom d’utilisateur',
	'NEW_USER_EXPLAIN'			=> 'Nouvel utilisateur dans lequel l’ancien utilisateur doit être fusionné. Cet utilisateur doit déjà exister.',
));
