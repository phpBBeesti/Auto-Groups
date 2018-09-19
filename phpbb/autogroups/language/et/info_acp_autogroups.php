<?php
/**
*
* Auto Groups extension for the phpBB Forum Software package.
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
*
* @copyright (c) 2015 phpBB Limited <https://www.phpbb.com>
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_AUTOGROUPS_MANAGE'			=> 'Halda automaatseid gruppe',
	'AUTOGROUPS_TYPE_NOT_EXIST'		=> 'Automaatse grupi tüüpi `%1$s` ei eksisteeri.',

	// Logs
	'ACP_AUTOGROUPS_SAVED_LOG'		=> '<strong>Automaatse grupi konfiguratsioon on salvestatud</strong>',
	'ACP_AUTOGROUPS_DELETE_LOG'		=> '<strong>Automaatse grupi konfiguratsioon on kustutatud</strong>',
));
