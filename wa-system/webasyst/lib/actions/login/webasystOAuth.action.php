<?php
/**
 * @package wa-system/webasyst/login
 */
class webasystOAuthAction extends waViewAction
{
    public function execute()
    {
        $this->template = wa()->getAppPath('templates/actions/oauth/', 'webasyst').'OAuth.html';
    }
}