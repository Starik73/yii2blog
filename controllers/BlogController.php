<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Blog;
use yii\data\Pagination;

class BlogController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays all blog.
     *
     * @return array
     */
    public function actionBlogs()
    {
         $query = Blog::find();
         $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
         $models = $query->offset($pages->offset)
         ->limit($pages->limit)
         ->all();
         return $this->render('blogs.tpl', compact('models', 'pages'));
    }

    /**
     * Displays one blog.
     *
     * @return string
     */
    public function actionView($id)
    {
        $model = Blog::findOne($id);
        
        $query = Blog::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
        $posts = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        return $this->render('view.tpl', [
            'model' => $model,
            'posts' => $posts,
        ]);
    }
}


