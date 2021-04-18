<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Banner;
use app\models\ContactForm;
use app\models\SignupForm;
use yii\data\Pagination;
use yii\helpers\Url;

class SiteController extends Controller
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
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index.tpl', ['title' => 'Astashenkov, +79021290036']);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
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
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        $breadcrumbs[] = ['label' => 'Форма обратной связи', 'url' => Url::toRoute('site/contact')];
        return $this->render('contact.tpl', [
            'model' => $model,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $breadcrumbs[] = ['label' => 'Информация', 'url' => Url::toRoute('site/about')];
        return $this->render('about.tpl', [
            'title' => 'Информация, +79021290036',
            'breadcrumbs' => $breadcrumbs,
            ]);
    }

    /**
     * Displays project page.
     *
     * @return string
     */
    public function actionProject()
    {
        $query = Banner::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
        $breadcrumbs[] = ['label' => 'Проекты', 'url' => Url::toRoute('site/project')];
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('project.tpl', [
            'models' => $models, 
            'pages' => $pages, 
            'breadcrumbs' => $breadcrumbs, 
            'title' => 'Работы',
            ]);
    }

    /**
     * Форма регистрации.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
}
