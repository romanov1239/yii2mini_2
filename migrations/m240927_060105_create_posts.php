<?php

use yii\db\Migration;

/**
 * Class m240927_060105_create_posts
 */
class m240927_060105_create_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('post', [
            'id' => 1,
            'category_id' => 1,
            'title' => 'Первый пост',
            'excerpt' => 'Краткое описание первого поста',
            'content' => 'Содержимое первого поста',
            'img' => 'image1.jpg',
            'keywords' => 'Первый, пост',
            'description' => 'Описание первого поста',
        ]);

        $this->insert('post', [
            'id' => 2,
            'category_id' => 1,
            'title' => 'Второй пост',
            'excerpt' => 'Краткое описание второго поста',
            'content' => 'Содержимое второго поста',
            'img' => 'image2.jpg',
            'keywords' => 'Второй, пост',
            'description' => 'Описание второго поста',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('post', ['id' => 1]);
        $this->delete('post', ['id' => 2]);
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240927_060105_create_posts cannot be reverted.\n";

        return false;
    }
    */
}
