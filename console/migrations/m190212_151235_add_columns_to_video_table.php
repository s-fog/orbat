<?php

use yii\db\Migration;

/**
 * Handles the creation of table `letter_review`.
 */
class m190212_151235_add_columns_to_video_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('video', 'show_on_main_page', $this->integer()->null()->defaultValue(1));
        $this->addColumn('video', 'sort_order', $this->integer()->unsigned()->null()->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('letter_review');
    }
}
