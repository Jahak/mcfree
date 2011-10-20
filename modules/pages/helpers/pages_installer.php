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

//---------------------------------------------

/**
 * Хелпер установки модуля
 */
class pages_installer {
	/**
	* Установка модуля
	*/
	public static function install(&$db) {
		$db->query("CREATE TABLE IF NOT EXISTS #__pages (
			  `page_id` int(11) NOT NULL AUTO_INCREMENT,
			  `user_id` int(11) NOT NULL,
			  `title` varchar(50) NOT NULL,
			  `content` text NOT NULL,
			  PRIMARY KEY (`page_id`)
			) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
		");
	}

	/**
	* Деинсталляция модуля
	*/
	public static function uninstall(&$db) {
		$db->query("DROP TABLE #__pages;");
	}
}
?>