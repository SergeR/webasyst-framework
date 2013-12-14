<?php
/**
 * @package wa-apps/photos
 */
class photosForgotpasswordAction extends waForgotPasswordAction
{
    public function execute()
    {
        $this->setLayout(new photosDefaultFrontendLayout());
        $this->setThemeTemplate('forgotpassword.html');
        parent::execute();
    }
}