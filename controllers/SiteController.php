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
        $title = 'Astashenkov SITE, +79021290036';
        $description = 'Блог самодостаточного программиста';
        $img_url = "@web/img/logo.png";
        Yii::$app->seo->putFacebookMetaTags([
            'og:url'        => Url::canonical(),
            'og:type'       => 'website',
            'og:title'      => $title,
            'og:description'=> $description,
            'og:image'      => Url::to($img_url, true),
            'fb:app_id'     => '1811670458869631',//для статистики по переходам
        ]);
        
        Yii::$app->seo->putTwitterMetaTags([
            'twitter:site'        => Url::canonical(),
            'twitter:title'       => $title,
            'twitter:description' => $description,
            'twitter:creator'     => 'Astashenkov',
            'twitter:image:src'   => Url::to($img_url, true),
            'twitter:card'        => 'summary',

        ]);
        
        Yii::$app->seo->putGooglePlusMetaTags([
            'name'       => $title,
            'description'=> $description,
            'image'      => Url::to($img_url, true),
            
        ]);
        return $this->render('index.tpl', ['title' => $title]);
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
