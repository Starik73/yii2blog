<?php

use yii\db\Migration;
class m210417_142216_Blog extends Migration
{
    public function safeUp()
    {
        // blog
        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(150)->notNull(),
            'author' => $this->string(150)->null(),
            'created_at' => $this->string(50)->null(),
            'updated_at' => $this->string(50)->null(),
            'h2' => $this->string(100)->null(),
            'content' => $this->text()->null(),
            'blog_img' => $this->string(70)->null(),
            'description' => $this->string(250)->null(),
            'keywords' => $this->string(100)->null(),
        ], $this->tableOptions);
        // banner
        $this->createTable('{{%banner}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(150)->null(),
            'created_at' => $this->string(50)->null(),
            'updated_at' => $this->string(50)->null(),
            'alt' => $this->string(100)->null(),
            'banner_url' => $this->string(70)->null(),
        ], $this->tableOptions);
    }

    public function safeDown()
    {
    }
}
