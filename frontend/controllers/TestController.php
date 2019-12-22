<?php

namespace frontend\controllers;

use frontend\models\rest\User;

class TestController extends BaseApiController
{
    public $modelClass = User::class;

}