<?php namespace Cmantikweb\Simplecomments;

use Backend;
use System\Classes\PluginBase;

/**
 * simplecomments Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'simplecomments',
            'description' => 'No description provided yet...',
            'author'      => 'cmantikweb',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            Components\Boxcomment::class => 'boxcomment',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'cmantikweb.simplecomments.some_permission' => [
                'tab' => 'simplecomments',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'simplecomments' => [
                'label'       => 'simplecomments',
                'url'         => Backend::url('cmantikweb/simplecomments/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['cmantikweb.simplecomments.*'],
                'order'       => 500,
            ],
        ];
    }
}
