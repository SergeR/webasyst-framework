<?php

/**
 * Delete contact photo completely.
 * 
 * @package wa-system/webasyst/profile
 */
class webasystProfileDeletePhotoController extends waJsonController
{
    public function execute()
    {
        $contact = wa()->getUser();
        $contact['photo'] = 0;
        $contact->save();

        $oldDir = wa()->getDataPath("photo/".$contact->getId(), TRUE, 'contacts');
        if (file_exists($oldDir)) {
            waFiles::delete($oldDir);
        }

        $this->response = array('done' => 1);
    }
}
