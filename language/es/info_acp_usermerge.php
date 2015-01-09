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
 * Package:		Language [es]
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
	'ACP_USER_MERGE'		=> 'Fusionar Usuario',
	'VERSION' 			=> 'Versión',
	'LOG_USERS_MERGED'	=> '<strong>Usuarios fusionados</strong><br />%s',
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
