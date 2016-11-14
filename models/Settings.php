<?php
namespace Taras\Comments\Models;

use Model;
use Cms\Classes\Theme;
use Cms\Classes\Page;
class Settings extends Model
{
        
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'taras_comments_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    public function getStatusOptions($keyValue = null)
    {
        return Comments::STATUS;
    }

}