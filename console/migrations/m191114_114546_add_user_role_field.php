<?php

use yii\db\Migration;

/**
 * Class m191114_114546_add_user_role_field
 */
class m191114_114546_add_user_role_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'role', $this->string(64));

        $this->update('{{%user}}', ['role' => 'user']);
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'role');
    }
}
