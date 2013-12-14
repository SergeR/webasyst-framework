<?php

/**
 * Own profile editor for users who don't have access to Contacts app.
 * 
 * @package wa-system/webasyst/profile
 */
class webasystProfilePhotoController extends waViewController
{
    public function execute()
    {
        $this->setLayout(new webasystProfileLayout());

        waSystem::getInstance('contacts', null, true);
        $this->executeAction(new contactsPhotoEditorAction(array('limited_own_profile' => 1)));
    }
}

