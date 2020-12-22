<?php namespace SergeyKasyanov\Popups;

use System\Classes\PluginBase;

/**
 * Popups Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'Popups',
            'description' => 'PopupController behavior',
            'author'      => 'SergeyKasyanov',
            'icon'        => 'icon-window-maximize'
        ];
    }
}
