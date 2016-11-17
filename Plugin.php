<?php namespace Taras\Comments;

use System\Classes\PluginBase;

/**
 * Class Plugin
 * @package Taras\Comments
 */
class Plugin extends PluginBase
{
    /**
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Taras\Comments\Components\Comments'       => 'commentsPost',

        ];
    }

    /**
     * @return array
     */
    public function registerSettings()
    {
        return [
            'config' => [
                'label'       => 'Comments',
                'icon'        => 'icon-comments-o',
                'description' => 'Manage Settings.',
                'class'       => 'Taras\Comments\Models\Settings',
                'order'       => 60
            ]
        ];
    }
}
