<?php
/**
 * This file is part of Webasyst framework.
 *
 * Licensed under the terms of the GNU Lesser General Public License (LGPL).
 * http://www.webasyst.com/framework/license/
 *
 * @link http://www.webasyst.com/
 * @author Webasyst LLC
 * @copyright 2011 Webasyst LLC
 * @package wa-system/Cache/Adapter
 * @license http://www.webasyst.com/framework/license/ LGPL
 */

abstract class waCacheAdapter
{
    protected $options;
    public function __construct($options)
    {
        $this->options = $options;
        $this->init();
    }

    protected function init()
    {
    }

    public function key($key, $app_id, $group = null)
    {
        $key = trim($key, '/');
        if (!$group || $group === true) {
            return $app_id.'/'. $key;
        } else {
            return $app_id.'/'.$group.'/'.$key;
        }
    }

    abstract public function get($key);

    abstract public function set($key, $value, $expiration = null, $group = null);

    abstract public function delete($key);

    abstract public function deleteGroup($group);

    abstract public function deleteAll();

}