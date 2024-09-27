<?php

use yii\db\Migration;

/**
 * Class m240927_055359_create_timestampBehavior
 */
class m240927_055359_create_timestampBehavior extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('post', 'created_at', $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240927_055359_create_timestampBehavior cannot be reverted.\n";

        return false;
    }
}
