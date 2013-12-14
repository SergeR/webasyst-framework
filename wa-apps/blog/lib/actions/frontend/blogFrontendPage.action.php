<?php
/**
 * @package wa-apps/blog/actions/frontend
 */
class blogFrontendPageAction extends waPageAction
{

    public function execute()
    {
        $this->setLayout(new blogFrontendLayout());
        parent::execute();
    }
}