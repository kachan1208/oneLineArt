<?php

use yii\db\Migration;

/**
 * Handles the creation for table `art`.
 */
class m160907_113120_create_art_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('art', [
            'id' => $this->primaryKey(),
            'title' => $this->string('30')->notNull(),
            'text' => $this->string('500')->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */ 
    public function down()
    {
        $this->dropTable('art');
    }
}
