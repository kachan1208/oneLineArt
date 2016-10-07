<?php

use yii\db\Migration;

class m160907_201148_table_art_tag_change_index extends Migration
{
    public function up()
    {
        // $this->dropIndex('idx-art_tag', 'art_tag');
           // $this->dropIndex('fk-art_tag-tag_id', 'art_tag');
        $this->createIndex('idx-art_tag_unique', 'art_tag', ['art_id', 'tag_id'], true);
    }

    public function down()
    {
 
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
