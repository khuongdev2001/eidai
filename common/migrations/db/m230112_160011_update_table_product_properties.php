<?php

use yii\db\Migration;

/**
 * Class m230112_160011_update_table_product_properties
 */
class m230112_160011_update_table_product_properties extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("product_properties","property_slug",$this->string(500));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn("product_properties","property_slug");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230112_160011_update_table_product_properties cannot be reverted.\n";

        return false;
    }
    */
}
