<?php

namespace minor946\modules\UserManagement\components;

use minor946\modules\UserManagement\models\forms\ConfirmEmailForm;
use minor946\modules\UserManagement\models\forms\PasswordRecoveryForm;
use minor946\modules\UserManagement\models\forms\RegistrationForm;
use minor946\modules\UserManagement\models\User;
use yii\base\Event;

class UserAuthEvent extends Event
{
    const BEFORE_REGISTRATION = 'beforeRegistration';
    const AFTER_REGISTRATION = 'afterRegistration';


    const BEFORE_PASSWORD_RECOVERY_REQUEST = 'beforePasswordRecoveryRequest';
    const AFTER_PASSWORD_RECOVERY_REQUEST = 'afterPasswordRecoveryRequest';

    const BEFORE_PASSWORD_RECOVERY_COMPLETE = 'beforePasswordRecoveryComplete';
    const AFTER_PASSWORD_RECOVERY_COMPLETE = 'afterPasswordRecoveryComplete';


    const BEFORE_EMAIL_CONFIRMATION_REQUEST = 'beforeEmailConfirmationRequest';
    const AFTER_EMAIL_CONFIRMATION_REQUEST = 'afterEmailConfirmationRequest';

    const BEFORE_EMAIL_CONFIRMATION_COMPLETE = 'beforeEmailConfirmationComplete';
    const AFTER_EMAIL_CONFIRMATION_COMPLETE = 'afterEmailConfirmationComplete';

    /**
     * @var User
     */
    public $user;

    /**
     * @var RegistrationForm|PasswordRecoveryForm|ConfirmEmailForm
     */
    public $model;

    /**
     * Determine if script should continue after this event
     *
     * @var boolean
     */
    public $isValid = true;
}
