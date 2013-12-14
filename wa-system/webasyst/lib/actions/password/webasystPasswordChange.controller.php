<?php
/**
 * @package wa-system/webasyst/password
 */
class webasystPasswordChangeController extends waViewController
{
    public function execute()
    {
        $this->executeAction(new webasystPasswordChangeAction());
    }
}
