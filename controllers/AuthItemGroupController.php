<?php

namespace minor946\modules\UserManagement\controllers;

use minor946\modules\UserManagement\models\rbacDB\AuthItemGroup;
use minor946\modules\UserManagement\models\rbacDB\search\AuthItemGroupSearch;
use webvimark\components\AdminDefaultController;
use Yii;

/**
 * AuthItemGroupController implements the CRUD actions for AuthItemGroup model.
 */
class AuthItemGroupController extends AdminDefaultController
{
    /**
     * @var AuthItemGroup
     */
    public $modelClass = 'minor946\modules\UserManagement\models\rbacDB\AuthItemGroup';

    /**
     * @var AuthItemGroupSearch
     */
    public $modelSearchClass = 'minor946\modules\UserManagement\models\rbacDB\search\AuthItemGroupSearch';

    /**
     * Define redirect page after update, create, delete, etc
     *
     * @param string $action
     * @param AuthItemGroup $model
     *
     * @return string|array
     */
    protected function getRedirectPage($action, $model = null)
    {
        switch ($action) {
            case 'delete':
                return ['index'];
                break;
            case 'create':
            case 'update':
                return ['view', 'id' => $model->code];
                break;
            default:
                return ['index'];
        }
    }
}
