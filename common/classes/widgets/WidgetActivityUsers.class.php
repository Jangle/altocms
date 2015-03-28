<?php
/*---------------------------------------------------------------------------
 * @Project: Alto CMS
 * @Project URI: http://altocms.com
 * @Description: Advanced Community Engine
 * @Copyright: Alto CMS Team
 * @License: GNU GPL v2 & MIT
 *----------------------------------------------------------------------------
 * Based on
 *   LiveStreet Engine Social Networking by Mzhelskiy Maxim
 *   Site: www.livestreet.ru
 *   E-mail: rus.engine@gmail.com
 *----------------------------------------------------------------------------
 */

/**
 * Виджет выбора пользователей для чтения в ленте активности
 *
 * @package blocks
 * @since   1.0
 */
class WidgetActivityUsers extends Widget {
    /**
     * Запуск обработки
     */
    public function Exec() {

        // * пользователь авторизован?
        if ($oUserCurrent = $this->User_GetUserCurrent()) {
            // * Получаем и прогружаем необходимые переменные в шаблон
            $aUserSubscribes = $this->Stream_GetUserSubscribes($oUserCurrent->getId());
            $this->Viewer_Assign('aStreamSubscribedUsers', $aUserSubscribes ? $aUserSubscribes : array());

            // issue#449, список друзей пользователя не передавался в шаблон
            $aStreamFriends = $this->User_GetUsersFriend($oUserCurrent->getId());
            $this->Viewer_Assign('aStreamFriends', $aStreamFriends['collection']);
        }

    }
}

// EOF