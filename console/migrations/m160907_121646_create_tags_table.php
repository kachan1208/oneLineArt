<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tags`.
 */
class m160907_121646_create_tags_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tags', [
            'id' => $this->primaryKey(),
            'title' => $this->string(30)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tags');
    }
}
