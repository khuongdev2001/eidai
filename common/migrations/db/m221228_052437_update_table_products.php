<?php

use yii\db\Migration;

/**
 * Class m221228_052437_update_table_products
 */
class m221228_052437_update_table_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("products", "product_content", $this->text()->after("product_title"));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn("products", "product_content");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221228_052437_update_table_products cannot be reverted.\n";

        return false;
    }
    */
}
