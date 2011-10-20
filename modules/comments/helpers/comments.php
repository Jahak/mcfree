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
 * Хелпер модуля комментариев
 */
class comments {
    /**
     * Получение количества комментов
     */
    public static function get_count_comments($db, $module, $item_id) {
        $count = $db->get_one("SELECT COUNT(*) FROM #__comments_posts WHERE
            module = '" . a_safe($module) . "' AND
            item_id = '" . intval($item_id) . "'
        ");
        
        return $count;
    }
}

?>