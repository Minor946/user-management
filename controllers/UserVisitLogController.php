<?php

namespace minor946\modules\UserManagement\controllers;

use minor946\modules\UserManagement\models\search\UserVisitLogSearch;
use minor946\modules\UserManagement\models\UserVisitLog;
use webvimark\components\AdminDefaultController;
use Yii;

/**
 * UserVisitLogController implements the CRUD actions for UserVisitLog model.
 */
class UserVisitLogController extends AdminDefaultController
{
    /**
     * @var UserVisitLog
     */
    public $modelClass = 'minor946\modules\UserManagement\models\UserVisitLog';

    /**
     * @var UserVisitLogSearch
     */
    public $modelSearchClass = 'minor946\modules\UserManagement\models\search\UserVisitLogSearch';

    public $enableOnlyActions = ['index', 'view', 'grid-page-size'];
}
