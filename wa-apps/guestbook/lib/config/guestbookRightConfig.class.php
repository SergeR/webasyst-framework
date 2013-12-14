<?php 
/**
 * @package wa-apps/guestbook
 */
class guestbookRightConfig extends waRightConfig
{
	public function init()
	{
		$this->addItem('delete', 'Can delete posts', 'checkbox');
	}
}