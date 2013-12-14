<?php
/**
 * A list of localized strings to use in JS.
 * 
 * @package wa-apps/contacts/backend
 */
class contactsBackendLocController extends waViewController
{
    public function execute() {
        $this->executeAction(new contactsBackendLocAction());
    }
    
    public function preExecute() {
        // do not save this page as last visited
    }
}

// EOF