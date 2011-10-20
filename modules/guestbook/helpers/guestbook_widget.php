<?php
/**
 * MobileCMS
 *
 * Open source content management system for mobile sites
 *
 * @author MobileCMS Team <support@mobilecms.ru>
 * @copyright Copyright (c) 2011, MobileCMS Team
 * @link http://mobilecms.ru Official site
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

defined('IN_SYSTEM') or die('<b>403<br />Запрет доступа!</b>');

/**
 * Виджет гостевой книги
 */
class guestbook_widget {
	/**
	* Показ виджета
	*/
	public static function display($widget_id) {
		$db = Registry::get('db');
		$messages = $db->get_one("SELECT COUNT(*) FROM #__guestbook");
		return '<img src="'. URL .'modules/guestbook/images/guestbook.png" alt="" /> <a href="'. a_url('guestbook') .'">Гостевая книга</a> <span class="count">['. $messages .']</span><br />';
	}

	/**
	* Настройка виджета
	*/
	public static function setup($widget) {
		a_notice('Данный виджет не требует настройки', a_url('index_page/admin'));
	}
}
?>