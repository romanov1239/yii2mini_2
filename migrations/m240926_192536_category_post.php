<?php

use yii\db\Migration;

/**
 * Class m240926_192536_category_post
 */
class m240926_192536_category_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'alias' => $this->string()->notNull()->unique(),
        ]);

        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'title' => $this->string()->notNull(),
            'excerpt' => $this->string(),
            'content' => $this->text()->notNull(),
            'img' => $this->string(),
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'keywords' => $this->string(),
            'description' => $this->text(),
        ]);

        $this->addForeignKey(
            'fk-post-category_id',
            'post',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-post-category_id', 'post');

        $this->dropTable('post');

        $this->dropTable('category');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240926_192536_category_post cannot be reverted.\n";

        return false;
    }
    */
}
