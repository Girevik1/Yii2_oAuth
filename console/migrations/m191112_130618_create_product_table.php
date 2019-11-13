<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m191112_130618_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'sklad_id' => $this->integer(10)->notNull(),
            'cost' => $this->string(32)->notNull(),
            'type_id' => $this->string(32)->notNull(),
            'text' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
