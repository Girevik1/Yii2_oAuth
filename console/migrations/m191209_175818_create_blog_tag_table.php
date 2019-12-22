<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog_tag}}`.
 */
class m191209_175818_create_blog_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blog_tag}}', [
            'id' => $this->primaryKey(),
            'blog_id' => $this->integer()->notNull(),
            'tag_id' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blog_tag}}');
    }
}
