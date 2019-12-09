<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog}}`.
 */
class m191208_200116_create_blog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(150)->notNull(),
            'text' => $this->text()->Null(),
            'url' => $this->string(150)->notNull(),
            'status_id' =>  $this->smallInteger(1)->notNull()->defaultValue(1),
            'sort' =>  $this->smallInteger(2)->notNull()->defaultValue(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blog}}');
    }
}
