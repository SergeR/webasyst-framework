<?php
/**
 * @package wa-apps/photos/frontend
 */
class photosFrontendPageAction extends waPageAction
{

    public function execute()
    {
        $this->setLayout(new photosDefaultFrontendLayout());

        parent::execute();
    }
}