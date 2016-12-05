<?php

use yii\db\Migration;

/**
 * Handles adding last_visit to table `options`.
 */
class m161205_075613_add_last_visit_column_to_options_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('options', 'last_visit', $this->integer(11)->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('options', 'last_visit');
    }
}
