<?php

namespace app\models;

use Yii;
use yii\imagine\Image;

/**
 * This is the model class for table "banner".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $alt
 * @property string|null $banner_url
 */
class Banner extends \yii\db\ActiveRecord
{
    public $image;

    public function upload()
    {
        if ($this->validate()) {
            if (file_exists("uploads/banner/img_{$this->id}.{$this->image->extension}")) {
                unlink("uploads/banner/img_{$this->id}.{$this->image->extension}");
            }
            $this->image->saveAs("uploads/banner/img_{$this->id}.{$this->image->extension}");
            Image::resize(("uploads/banner/img_{$this->id}.{$this->image->extension}"), 940, 450, false)
                 ->save(("uploads/banner/img_{$this->id}.{$this->image->extension}"), ['quality' => 80]);
            return "uploads/banner/img_{$this->id}.{$this->image->extension}";
        } else {
            return 'Error';
        }
    }

     /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 150],
            [['created_at', 'updated_at'], 'string', 'max' => 50],
            [['alt'], 'string', 'max' => 100],
            [['banner_url'], 'string', 'max' => 70],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'alt' => 'Alt',
            'banner_url' => 'Banner Url',
        ];
    }
}