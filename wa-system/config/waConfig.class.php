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
   * @see http://www.webasyst.ru/developers/docs/basics/classes/waConfig/#method-get
   * @param string $name Parameter name
   * @param mixed  $default Default value
   * @return mixed|null
   */
  public static function get($name, $default = null)
  {
    return isset(self::$config[$name]) ? self::$config[$name] : $default;
  }

  /**
   * Indicates whether a configuration parameter exists.
   *
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
   * @see http://www.webasyst.ru/developers/docs/basics/classes/waConfig/#method-getAll
   * @return array Associative array of configuration parameters.
   */
  public static function getAll()
  {
    return self::$config;
  }

  /**
   * Clears all current configuration parameters.
   * 
   * @see http://www.webasyst.ru/developers/docs/basics/classes/waConfig/#method-clear
   */
  public static function clear()
  {
    self::$config = array();
  }
}
