<?php namespace LZaplata\Pages\Controllers;

use Backend\Behaviors\FormController;
use Backend\Behaviors\ListController;
use Backend\Behaviors\RelationController;
use Backend\Facades\BackendAuth;
use BackendMenu;
use Backend\Classes\Controller;
use LZaplata\Pages\Models\Page;

class Pages extends Controller
{
    public $implement = [
        FormController::class,
        ListController::class,
        RelationController::class,
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        "lzaplata.pages.page",
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('LZaplata.Pages', 'main-menu-item');
    }

    /**
     * @param $config
     * @param $field
     * @param $model
     *
     * @return void
     */
    public function relationExtendConfig($config, $field, $model)
    {
        // Make sure the model and field matches those you want to manipulate
        if (!$model instanceof Page || $field !== "contents") {
            return;
        }

        $buttons = [];

        if (BackendAuth::userHasPermission("lzaplata.pages.content.create")) {
            $buttons[] = "create";
        }

        if (BackendAuth::userHasPermission("lzaplata.pages.content.delete")) {
            $buttons[] = "delete";
        }

        $config->view["toolbarButtons"] = empty($buttons) ? false : implode("|", $buttons);
    }
}
