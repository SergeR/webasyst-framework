<?php

/**
 * A list of localized strings to use in JS.
 * 
 * @package wa-apps/photos/backend
 */
class photosBackendLocController extends waViewController
{
    public function execute()
    {
        $this->executeAction(new photosBackendLocAction());
    }

    public function preExecute()
    {
        // do not save this page as last visited
    }
}
