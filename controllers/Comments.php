<?php namespace Taras\Comments\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

/**
 * Class Comments
 * @package Taras\Comments\Controllers
 */
class Comments extends Controller
{
    /**
     * @var array
     */
    public $implement = ['Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController'];

    /**
     * @var string
     */
    public $listConfig = 'config_list.yaml';
    /**
     * @var string
     */
    public $formConfig = 'config_form.yaml';
    /**
     * @var string
     */
    public $reorderConfig = 'config_reorder.yaml';

    /**
     * Comments constructor.
     */
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Taras.Comments', 'main-menu-item');
    }
}