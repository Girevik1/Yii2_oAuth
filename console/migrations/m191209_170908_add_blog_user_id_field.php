<?php

use yii\db\Migration;

/**
 * Class m191209_170908_add_blog_user_id_field
 */
class m191209_170908_add_blog_user_id_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%blog}}', 'user_id', $this->integer(11)->defaultValue(1));

    }

    public function down()
    {
        $this->dropColumn('{{%blog}}', 'user_id');
    }
}
