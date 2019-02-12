<?php

use yii\db\Migration;

/**
 * Handles the creation of table `letter_review`.
 */
class m190212_151234_create_letter_review_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('letter_review', [
            'id' => $this->primaryKey(),
            'image' => $this->string(255),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'sortOrder' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('letter_review');
    }
}
