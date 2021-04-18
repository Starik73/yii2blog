<?php

namespace app\modules\backend;

use yii\filters\VerbFilter;
use app\models\AccessRules;

/**
 * backend module definition class
 */
class BackEndModule extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\backend\controllers';

    public $uploadPath = '@webroot/uploads/images';

    public $urlPath = '@web/uploads/images';

    public $layout;

    public function init()
    {
        parent::init();

        $this->modules = [
            'filemanager' => [
                'class' => 'DeLuxis\Yii2SimpleFilemanager\SimpleFilemanagerModule',
                'as access' => [
                    'class' => \yii\filters\AccessControl::className(),
                    // We will override the default rule config with the new AccessRule class
                    'ruleConfig' => [
                        'class' => AccessRules::className(),
                    ],
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['index'],
                            'roles' => ['@'],
                        ],
                        [
                            'allow' => true,
                            'actions' => ['view'],
                            'roles' => ['@'],
                        ],
                        [
                            'allow' => true,
                            'actions' => ['update'],
                            'roles' => [5, 6, 7, 8, 9, 10],
                        ],
                        [
                            'allow' => true,
                            'actions' => ['create', 'upload', 'delete'],
                            'roles' => [10],
                        ],
                    ],
                ]
            ]
        ];

        $this->layout = 'base';
    }

    public function actions()
    {
        return [
            'images-get' => [
                'class' => 'vova07\imperavi\actions\GetImagesAction',
                'url' => $this->uploadPath, // Directory URL address, where files are stored.
                'path' => $this->urlPath, // Or absolute path to directory where files are stored.
                'options' => ['only' => ['*.jpg', '*.jpeg', '*.png', '*.gif', '*.ico']], // These options are by default.
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                // We will override the default rule config with the new AccessRule class
                'ruleConfig' => [
                    'class' => AccessRules::className(),
                ],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['view'],
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['update'],
                        'roles' => [5, 6, 7, 8, 9, 10],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['create', 'upload', 'delete'],
                        'roles' => [10],
                    ],
                ],
            ],
        ];
    }
}
