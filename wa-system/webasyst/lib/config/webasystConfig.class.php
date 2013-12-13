<?php
/**
 * @package wa-system/webasyst/config
 */
class webasystConfig extends waAppConfig
{
    public function getAppPath($path = null)
    {
        return $this->getRootPath().'/wa-system/'.$this->application.($path ? '/'.$path : '');
    }
}

