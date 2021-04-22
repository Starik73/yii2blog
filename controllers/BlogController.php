<?php

namespace app\controllers;

use Yii;
use yii\helpers\Url;
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
        $breadcrumbs[] = ['label' => 'Список блогов', 'url' => Url::toRoute('blog/blogs')];
        return $this->render('blogs.tpl', compact('models', 'pages', 'breadcrumbs'));
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
        $breadcrumbs[] = ['label' => 'Список блогов', 'url' => Url::toRoute('blog/blogs')];
        $breadcrumbs[] = ['label' => $model['title'], 'url' => Url::toRoute('blog/view/'.$model['id'])];
        return $this->render('view.tpl', compact('model', 'posts', 'breadcrumbs'));
    }
}
