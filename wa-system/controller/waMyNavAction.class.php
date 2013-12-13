<?php
/**
 * @package wa-system/controller
 */
class waMyNavAction extends waViewAction
{
    public function execute()
    {
        $auth = wa()->getAuthConfig();
        $this->view->assign('my_app', ifset($auth['app']));
        $this->setThemeTemplate('my.nav.html');
    }
}