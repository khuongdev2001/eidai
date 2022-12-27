<?php

use yii\db\Migration;

/**
 * Class m221227_075100_update_table_pages
 */
class m221227_075100_update_table_pages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("pages", "page_slug", $this->string(500));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn("pages", "page_slug");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221227_075100_update_table_pages cannot be reverted.\n";

        return false;
    }
    */
}
