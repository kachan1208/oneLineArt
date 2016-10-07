<?php

use yii\db\Migration;

class m160907_162743_drop_index_tag_id_from_art_tag extends Migration
{
    public function up()
    {
        $this->dropForeignKey('fk-art_tag-tag_id', 'art_tag');
    }

    public function down()
    {
        echo "m160907_162743_drop_index_tag_id_from_art_tag cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
