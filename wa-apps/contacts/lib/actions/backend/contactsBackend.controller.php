<?php
/**
 * @package wa-apps/contacts/backend
 */
class contactsBackendController extends waViewController
{
	public function execute()
	{
		$this->setLayout(new contactsDefaultLayout());
	}
}