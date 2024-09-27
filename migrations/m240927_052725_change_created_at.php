<?php

use yii\db\Migration;

/**
 * Class m240927_052725_change_created_at
 */
class m240927_052725_change_created_at extends Migration
{
    public function safeUp()
    {
        $this->alterColumn('post', 'created_at', $this->integer()->defaultValue(null));
    }

    public function safeDown()
    {
        $this->alterColumn('post', 'created_at', $this->integer()->notNull());
        return true;
    }
}
