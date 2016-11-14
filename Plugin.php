<?php namespace Taras\Comments;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Taras\Comments\Components\Comments'       => 'commentsPost',

        ];
    }

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
