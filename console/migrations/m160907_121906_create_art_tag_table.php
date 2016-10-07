<?php

use yii\db\Migration;

/**
 * Handles the creation for table `art_tag`.
 */
class m160907_121906_create_art_tag_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('art_tag', [
            'id' => $this->primaryKey(),
            'art_id' => $this->integer(),
            'tag_id' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-art_tag',
            'art_tag',
            ['art_id', 'tag_id']
        );

        $this->addForeignKey(
            'fk-art_tag-art_id',
            'art_tag',
            'art_id',
            'art',
            'id',
            'RESTRICT',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-art_tag-tag_id',
            'art_tag',
            'tag_id',
            'tags',
            'id',
            'RESTRICT',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('art_tag');
    }
}
