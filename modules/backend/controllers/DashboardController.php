<?php

namespace app\modules\backend\controllers;

use yii\web\Controller;

/**
 * Dashboard controller for the `backend` module
 */
class DashboardController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index.tpl');
    }
}
