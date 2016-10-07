<?php

use yii\db\Migration;

class m160907_164257_add_foreign_key_art_id_to_art_tag extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk-art_tag-art_id', 'art_tag', 'art_id', 'art', 'id', 'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropForeignKey('fk-art_tag-art_id', 'art_tag');

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
