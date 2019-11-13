<?php

use yii\db\Migration;

/**
 * Class m191113_202616_alter_table_user_drop_index_unique_on_username
 */
class m191113_202616_alter_table_user_drop_index_unique_on_username extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->dropIndex('username', 'user');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->createIndex('username','user','username', $unique = true);

        return false;
    }


}
