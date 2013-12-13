<?php
/**
 * @package wa-apps/photos/api/v1
 */
class photosPhotoGetListMethod extends waAPIMethod
{
    protected $method = 'GET';

    public function execute()
    {
        $_GET['hash'] = '';
        $method = new photosPhotoSearchMethod();
        $this->response = $method->getResponse(true);
    }
}