<?php
/**
 * @package wa-apps/photos/dialog
 */
class photosDialogRatesAction extends waViewAction
{
    public function execute()
    {
        $this->view->assign('max_rate', 5);
    }
}