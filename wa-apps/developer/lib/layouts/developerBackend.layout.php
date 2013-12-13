<?php
/**
 * @package wa-apps/developer
 */
class developerBackendLayout extends waLayout
{
    public function execute()
    {
        if (!$this->view->getVars('page')) {
            $this->view->assign('page', '');
        }
    }
}