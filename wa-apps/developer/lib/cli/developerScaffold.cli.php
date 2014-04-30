<?php
/**
 * Description of developerScaffold
 *
 * @author Serge Rodovnichenko <sergerod@gmail.com>
 */
class developerScaffoldCli extends waCliController
{
	public function execute()
    {
        $module = waRequest::param(0);
        
        if(!$module) {
            $module = "Help";
        }
        
        if(method_exists($this, $module)) {
            $this->$module();
        }
        
    }
    
    /**
     * Создание плагина службы доставки
     */
    private function SystemShippingPlugin()
    {
        $plugin_name = trim(waRequest::param(1));
        
        if(!$plugin_name) {
            $this->SystemShippingPluginHelp();
            return;
        }

        $dirs = array(
            "$plugin_name/img",
            "$plugin_name/lib",
            "$plugin_name/lib/config",
            "$plugin_name/templates"
        );
        
        $this->createDirectories("wa-plugins/shipping", $dirs);
        
    }
    
    /**
     * Показ основной помощи
     */
    private function Help()
    {
        echo "Developer Scaffold System for Webasyst Framework 1.0\n";
        echo "=====================================================\n";
        echo "\n";
        echo "Run: php cli developer Scaffold <action> [params]\n";
        echo "Valid actions:\n";
        echo "SystemShippingPlugin - create a shipping plugin\n";
    }
    
    /**
     * Создание директорий, перечисленных в массиве внутри базовой
     * 
     * @param string $base_directory Базовая директория, относительно корня установки
     * @param array $directories список директорий для создания
     */
    private function createDirectories($base_directory, $directories)
    {
        $root_dir = waSystem::getInstance()->getConfig()->getPath('root');
        
        $base_directory = "$root_dir/$base_directory";
        
        if(substr($base_directory, -1) !== '/') {
            $base_directory .= "/";
        }
        
        foreach($directories as $dir) {
            waFiles::create($base_directory . $dir, TRUE);
        }
        
    }
}
