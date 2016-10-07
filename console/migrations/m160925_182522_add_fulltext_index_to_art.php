<?php

use yii\db\Migration;

class m160925_182522_add_fulltext_index_to_art extends Migration
{
    public function up()
    {
        $this->createIndex('content', 'art', ['title']);
    }

    public function down()
    {
        echo "m160925_182522_add_fulltext_index_to_art cannot be reverted.\n";

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
