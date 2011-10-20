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
 * Хелпер событий модуля событий
 */
class private_events {
	/**
	* Перед выполнением контроллера
	*/
	public static function pre_controller(&$db) {
		if(USER_ID != -1) {
			$new_messages = $db->get_one("SELECT COUNT(*) FROM #__private_messages WHERE user_to_id = '". USER_ID ."' AND user_id = '". USER_ID ."' AND folder = 'new'");
			if($new_messages > 0) define('PRIVATE_NEW_MESSAGES', $new_messages);
		}
	}
}
?>