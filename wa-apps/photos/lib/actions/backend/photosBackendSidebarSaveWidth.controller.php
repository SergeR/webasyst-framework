<?php
/**
 * @package wa-apps/photos/backend
 */
class photosBackendSidebarSaveWidthController extends waJsonController
{    
    public function execute() {
        $this->getConfig()->setSidebarWidth((int) waRequest::post('width'));
    }
}