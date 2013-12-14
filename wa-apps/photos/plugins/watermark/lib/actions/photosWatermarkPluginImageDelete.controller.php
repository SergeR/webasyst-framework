<?php
/**
 * @package wa-apps/photos/plugin/watermark
 */
class photosWatermarkPluginImageDeleteController extends waJsonController
{
    public function execute()
    {
        $plugin = wa()->getPlugin('watermark');
        $plugin->saveSettings(array(
            'delete_image' => 1
        ));
    }
}