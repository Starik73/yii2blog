<?php

namespace app\components;

use Yii;
use yii\base\Component;

class SeoComponent extends Component
{
    public function putFacebookMetaTags($tags){
        foreach($tags as $prop => $content){
            Yii::$app->view->registerMetaTag([
                'property' => $prop,
                'content' => $content,
            ], $prop);
        }
    }
    
    public function putTwitterMetaTags($tags){
        foreach($tags as $name => $content){
            Yii::$app->view->registerMetaTag([
                'name' => $name,
                'content' => $content,
            ], $name);
        }
    }
    
    public function putGooglePlusMetaTags($tags){
        foreach($tags as $itemprop => $content){
            Yii::$app->view->registerMetaTag([
                'itemprop' => $itemprop,
                'content' => $content,
            ], $itemprop);
        }
    }
}