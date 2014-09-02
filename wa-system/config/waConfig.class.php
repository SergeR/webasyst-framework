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
 * @package wa-system/Config
 * @license http://www.webasyst.com/framework/license/ LGPL
 * @see http://www.webasyst.ru/developers/docs/basics/classes/waConfig/
 */
class waConfig
{
  protected static $config = array();

  /**
   * Returns value of configuration parameter by name.
   *
   * @param string $name Parameter name
   * @param mixed  $default Default value
   *
   * @return mixed value, if the config parameter exists, otherwise null
   * @see http://www.webasyst.ru/developers/docs/basics/classes/waConfig/#method-get
   * @return mixed|null
   */
  public static function get($name, $default = null)
  {
    return isset(self::$config[$name]) ? self::$config[$name] : $default;
  }

  /**
   * Indicates whether a configuration parameter exists.
   *
   * @param string $name A config parameter name
   *
   * @return bool true, if the config parameter exists, otherwise false
   * @see http://www.webasyst.ru/developers/docs/basics/classes/waConfig/#method-has
   * @param string $name Parameter name
   * @return bool
   */
  public static function has($name)
  {
    return array_key_exists($name, self::$config);
  }

  /**
   * Sets a value to a configuration parameter.
   *
   * Non-existent parameter will be created.
   *
   * @param string $name  A config parameter name
   * @param mixed  $value A config parameter value
   * @see http://www.webasyst.ru/developers/docs/basics/classes/waConfig/#method-set
   * @param string $name  Parameter name
   * @param mixed  $value Parameter value
   */
  public static function set($name, $value)
  {
    self::$config[$name] = $value;
  }

  /**
   * Sets an array of configuration parameters.
   *
   * If the name of an existing parameter matches any of the keys of the supplied
   * array, the associated value will be overridden.
   *
   * @param array $parameters An associative array of config parameters and their associated values
   * @see http://www.webasyst.ru/developers/docs/basics/classes/waConfig/#method-add
   * @param array $parameters Associative array of configuration parameters and their associated values
   */
  public static function add($parameters = array())
  {
    self::$config = array_merge(self::$config, $parameters);
  }

  /**
   * Returns all configuration parameters.
   *
   * @return array An associative array of configuration parameters.
   * @see http://www.webasyst.ru/developers/docs/basics/classes/waConfig/#method-getAll
   * @return array Associative array of configuration parameters.
   */
  public static function getAll()
  {
    return self::$config;
  }

  /**
   * Clears all current config parameters.
   * @see http://www.webasyst.ru/developers/docs/basics/classes/waConfig/#method-clear
   * Clears all current configuration parameters.
   */
  public static function clear()
  {
    self::$config = array();
  }
}
