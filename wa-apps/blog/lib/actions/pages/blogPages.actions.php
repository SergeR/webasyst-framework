<?php
/**
 * @package wa-apps/blog/actions/page
 */
class blogPagesActions extends waPageActions
{
    protected $ibutton = false;

    public function defaultAction()
    {
        $this->setLayout(new blogDefaultLayout());
        $this->getResponse()->setTitle(_ws('Pages'));

        parent::defaultAction();
    }
}