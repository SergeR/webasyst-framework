<?php
/**
 * @package wa-apps/site
 */
class siteForgotpasswordAction extends waForgotPasswordAction
{
    public function execute()
    {
        $this->setLayout(new siteFrontendLayout());
        $this->setThemeTemplate('forgotpassword.html');
        parent::execute();
    }
}