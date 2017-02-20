<?php
/**
*
* User Merge extension for the phpBB Forum Software package.
* Translated By : Bassel Taha Alhitary - www.alhitary.net

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
	'VERSION' 			=> 'الإصدار ',
	'LOG_USERS_MERGED'	=> '<strong>دمج الأعضاء</strong><br />%s',
	'NO_USER_FOR_MERGE'					=> 'العضو المُحدد للدمج غير موجود في قاعدة البيانات.',
	'NO_USER_SPECIFIED'			=> 'لم يتم تحديد أحد الأعضاء للدمج.',
	'CANNOT_MERGE_SELF'			=> 'أنت تحاول حذف حساب عضويتك.',
	'CANNOT_MERGE_FOUNDER'		=> 'لا يمكن حذف المؤسسين إلا بواسطة مؤسسين آخرين فقط.',
	'CANNOT_MERGE_SAME'			=> 'لا يُمكن دمج حساب العضو <strong>%s</strong> مع نفسه.',

	'USERS_MERGED'				=> 'تم دمج الأعضاء المُحددين بنجاح.',
	'MERGE_USERS'				=> 'دمج الأعضاء',
	'MERGE_USERS_CONFIRM'		=> 'هل أنت متأكد من دمج الأعضاء المُحددين ؟<br /><strong>سيتم حذف العضو %s , ولن تستطيع من استعادته بعد ذلك.</strong>',
	'ACP_USER_MERGE_TITLE'		=> 'دمج الأعضاء',
	'ACP_USER_MERGE_EXPLAIN'	=> 'هنا تستطيع دمج عدد 2 أعضاء إلى عضو واحد. نرجوا الإنتباه إلى أنه سيتم حذف العضو القديم ونقل مشاركاته فقط إلى العضو الجديد.',

	'OLD_USER'					=> 'اسم المستخدم القديم',
	'OLD_USER_EXPLAIN'			=> 'العضو القديم الذي تريد دمجه إلى العضو الجديد. انتبه : سيتم حذفه عند الإنتهاء من الدمج.',
	'NEW_USER'					=> 'اسم المستخدم الجديد',
	'NEW_USER_EXPLAIN'			=> 'العضو الجديد الذي تريد دمج العضو القديم إليه. هذا العضو يجب أن يكون موجود مُسبقاً.',
));
