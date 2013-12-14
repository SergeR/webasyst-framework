<?php 
/**
 * @package wa-system/Cache
 */
class waSystemCache extends waVarExportCache
{
    /**
     * @return string
     */
    protected function getFilePath()
    {
        $path = waConfig::get('wa_path_cache').'/'.$this->key.'.php';
        waFiles::create($path);
        return $path;
    }

    /**
     * @return int
     */
    public function getFilemtime()
    {
        $path = $this->getFilePath();
        if (file_exists($path)) {
            return filemtime($path);
        }
        return 0;
    }
}