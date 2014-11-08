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
 * Package:		Language [es]
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
	'NO_USER'					=> 'Un usuario especificado para la fusión no se encuentra dentro de la base de datos.',
	'NO_USER_SPECIFIED'			=> 'No se ha especificado un usuario para fusionar.',
	'CANNOT_MERGE_SELF'			=> 'Usted está tratando de eliminarse a si mismo.',
	'CANNOT_MERGE_FOUNDER'		=> 'Fundadores sólo pueden borrarse con otros fundadores.',

	'USERS_MERGED'				=> 'Los usuarios especificados se fusionaron correctamente.',
	'MERGE_USERS'				=> 'Unir Usuarios',
	'MERGE_USERS_CONFIRM'		=> '¿Está seguro de que desea fusionar estos usuarios?',
	'ACP_USER_MERGE_TITLE'		=> 'Unir Usuarios',
	'ACP_USER_MERGE_EXPLAIN'	=> 'Aquí usted puede fusionar dos usuarios en un usuario. Tenga en cuenta que el antiguo usuario será borrado, y sólo el contenido que haya hecho el usuario será transferido al nuevo usuario.',

//	'LOG_USERS_MERGED'	=> '<strong>Merged users</strong>',

	'OLD_USER'					=> 'Antiguo nombre de usuario',
	'OLD_USER_EXPLAIN'			=> 'El usuario antiguo que será fusionado. Tenga cuidado, este usuario se borrará en dicha fusión.',
	'NEW_USER'					=> 'Nuevo nombre de usuario',
	'NEW_USER_EXPLAIN'			=> 'El usuario nuevo con el que el otro usuario debe fusionarse. Este usuario ya debe existir.',
));
