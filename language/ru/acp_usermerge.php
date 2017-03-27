<?php
/**
*
* User Merge extension for the phpBB Forum Software package.
* Russian translation by Kot Matroskin (https://mindreader.hacktest.net/en/)
*
* @copyright (c) 2015 RMcGirr83 (Rich McGirr) rmcgirr83@rmcgirr83.org & Jari Kanerva (tumba25) <http://www.phpbbmodders.net>
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'VERSION' 			=> 'Версия',
	'LOG_USERS_MERGED'	=> '<strong>Пользователи объединены</strong><br />%s',
	'NO_USER_FOR_MERGE'			=> 'Указанного пользователя для объединения нет в базе данных.',
	'NO_USER_SPECIFIED'			=> 'Не указан пользователь для объединения.',
	'CANNOT_MERGE_SELF'			=> 'Вы пытаетесь удалить себя.',
	'CANNOT_MERGE_FOUNDER'		=> 'Основатели могут быть удалены только другими основателями.',
	'CANNOT_MERGE_SAME'			=> 'Вы не можете объединить пользователя <strong>%s</strong> с самим собой.',

	'USERS_MERGED'				=> 'Указанные пользователи были успешно объединены.',
	'MERGE_USERS'				=> 'Объединить пользователей',
	'MERGE_USERS_CONFIRM'		=> 'Вы уверены, что хотите объединить этих пользователей?<br /><strong>%s будет удален безвозвратно.</strong>',
	'ACP_USER_MERGE_TITLE'		=> 'Merge Users',
	'ACP_USER_MERGE_EXPLAIN'	=> 'Здесь вы можете объединить двух пользователей в одного. Обратите внимание, что старый пользователь будет удален, и только созданный им контент будет передан новому пользователю.',

	'OLD_USER'					=> 'Старое имя пользователя',
	'OLD_USER_EXPLAIN'			=> 'Старый пользователь для объединения. Осторожно, этот пользователь будет удален в результате объединения.',
	'NEW_USER'					=> 'Новое имя пользователя',
	'NEW_USER_EXPLAIN'			=> 'Новый пользователь, получившийся из объединения со старым. Этот пользователь должен уже существовать.',
));
