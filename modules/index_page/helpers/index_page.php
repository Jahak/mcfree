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
 * Хелпер модуля главной страницы
 */
class index_page {
	/**
	* Получение списка доступных виджетов
	*/
	public static function get_widgets() {
		modules::initialize();
		$modules = Registry::get('modules');
		
		$widgets = array();
		$dir = opendir(ROOT .'modules/');
		while($module = readdir($dir)) {
			if(file_exists(ROOT .'modules/'. $module .'/helpers/'. $module .'_widget.php') && (modules::is_active_module($module) || $module = 'user')) {
				if(!empty($modules[$module]['title'])) $widgets[$module] = $modules[$module]['title'];
				else {
					$module_info = parse_ini_file(ROOT .'modules/'. $module .'/module.ini');
					$widgets[$module] = $module_info['title'];
				}
			}
		}
		return $widgets;
	}
}
?>