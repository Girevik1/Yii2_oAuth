<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sklad}}`.
 */
class m191112_134524_create_sklad_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sklad}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'address' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sklad}}');
    }
}
