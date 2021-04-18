<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title
 * @property string|null $author
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $h2
 * @property string|null $content
 * @property string|null $blog_img
 * @property string|null $description
 * @property string|null $keywords
 */
class Blog extends \yii\db\ActiveRecord
{
    public $image;

    public function upload()
    {
        if ($this->validate()) {
            if (file_exists("uploads/blog/img_{$this->id}.{$this->image->extension}")) {
                unlink("uploads/blog/img_{$this->id}.{$this->image->extension}");
            }
            $this->image->saveAs("uploads/blog/img_{$this->id}.{$this->image->extension}");
            return "uploads/blog/img_{$this->id}.{$this->image->extension}";
        } else {
            return 'Error';
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['content'], 'string'],
            [['title', 'author'], 'string', 'max' => 150],
            [['h2', 'keywords'], 'string', 'max' => 100],
            [['blog_img'], 'string', 'max' => 70],
            [['description'], 'string', 'max' => 250],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заглавие',
            'author' => 'Автор',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'h2' => 'Заголовок',
            'content' => 'Содержание',
            'blog_img' => 'Основная картинка',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'image' => 'Image',
        ];
    }
}
