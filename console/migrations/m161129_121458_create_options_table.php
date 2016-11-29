<?php

use yii\db\Migration;

/**
 * Handles the creation of table `options`.
 */
class m161129_121458_create_options_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('options', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'notify_email' => $this->integer(1)->defaultValue(0),
            'notify_browser' => $this->integer(1)->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('options');
    }
}
