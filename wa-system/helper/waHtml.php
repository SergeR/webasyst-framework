<?php
/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 Serge Rodovnichenko, <sergerod@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 * @license http://opensource.org/licenses/MIT MIT
 * @package webasyst/wa-system/helper
 */

/**
 * HTML heler to output well-formatted HTML tags and other HTML structures
 * 
 * @author Serge Rodovnichenko <sergerod@gmail.com>
 */
class waHtml
{
    private static $scripts;

    /**
     * Возвращает тэг HTML с содержимым и атрибутами
     * 
     * @todo Перенести в хелпер для всей системы, этот хелпер наследовать от него
     * @param type $tag
     * @param type $content
     * @param type $options
     * @return string
     */
    public static function tag($tag, $content = "", $options = array())
    {
        /** @var array Список тэгов, которые не надо закрывать, если контент пуст */
        $open = array('link', 'input');

        $opts = array();
        $attributes = "";
        if (!empty($options)) {
            foreach ($options as $key => $value) {
                if (!is_null($value))
                    $opts[] = "$key=\"{$value}\"";
            }

            $attributes = " " . implode(" ", $opts);
        }

        if (empty($content) && in_array(strtolower($tag), $open)) {
            return "<{$tag}{$attributes}>";
        }

        return "<{$tag}{$attributes}>$content</$tag>";
    }

    public static function css($url)
    {
        waHtml::$scripts['css']['default'][] = $url;
    }

    /**
     * Сохраняет в буфер ссылку на требуемый скрипт. Ссылки на скрипты можно
     * делить на блоки и, впоследствии, выводить эти блоки в разных местах
     * шаблона
     * 
     * @todo Перенести в хелпер для всей системы, этот хелпер наследовать от него
     * @todo Определять и удалять дублирующиеся ссылки в пределах блока или всего массива
     * @todo Добавлять расширение .js по необходимости
     * @todo Магия с путями до скрипта
     * @param string $script Ссылка на скрипт
     * @param string $block Название блока. По умолчанию 'default'
     */
    public static function script($script, $block = 'default')
    {
        if(is_array(waHtml::$scripts) && array_key_exists('script', waHtml::$scripts) && array_key_exists($block, waHtml::$scripts['script']) && in_array($script, waHtml::$scripts['script'][$block]))
            return;
        
        waHtml::$scripts['script'][$block][] = $script;
    }

    /**
     * Выводит сохраненный с помощью методов script, css и т.д. блок
     * @param string $type Тип блока. script/css и т.д.
     * @param string $block Блок, который необходимо вывести
     * @return string
     */
    public static function fetch($type='script', $block = 'default')
    {
        $output = '';
        $attributes = array();
        
        if(!array_key_exists($type, waHtml::$scripts))
            return $output;

        switch ($type) {
            case 'css':
                $attributes = array('rel'=>'stylesheet');
                $tag = 'link';
                $linkAttr = 'href';
                break;

            case 'script' :
                $attributes = array('type' => 'text/javascript');
                $tag = 'script';
                $linkAttr = 'src';
            default:
                break;
        }
        
        if (is_array(waHtml::$scripts) && array_key_exists($block, waHtml::$scripts[$type])) {
            foreach (waHtml::$scripts[$type][$block] as $link) {
                $output .= waHtml::tag($tag, NULL, array_merge($attributes, [$linkAttr => $link])) . "\n";
            }
//            unset(Html::$scripts[$block]);
        }

        return $output;
    }

}
