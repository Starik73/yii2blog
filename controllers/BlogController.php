<?php

namespace app\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use app\models\Blog;
use yii\data\Pagination;

class BlogController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
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
        if (!$model) {
            throw new NotFoundHttpException("Данный блог еще не написан :)");
        }
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
