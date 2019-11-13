<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%person}}`.
 */
class m191112_200820_create_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%person}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(255)->notNull(),
            'last_name' => $this->string(255)->notNull(),
            'country_id' => $this->integer(11)->notNull(),
            'parent_id' => $this->string(50)->notNull(),
        ]);

        $this->addForeignKey(
            'fk-person-country_id-country-id',
            'person',
            'country_id',
            'country',
            'id',
            'RESTRICT'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%person}}');
    }
}
