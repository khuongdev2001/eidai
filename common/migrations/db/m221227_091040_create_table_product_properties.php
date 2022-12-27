<?php

use yii\db\Migration;

/**
 * Class m221227_091040_create_table_product_properties
 */
class m221227_091040_create_table_product_properties extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("product_properties", [
            "id" => $this->primaryKey(),
            "user_id" => $this->integer(),
            "product_id" => $this->integer(),
            "property_id" => $this->integer(),
            "property_value" => $this->string(500),
            "created_at" => $this->dateTime(),
            "updated_at" => $this->dateTime(),
            "deleted_at" => $this->dateTime()
        ]);

        $this->createIndex("idx-product_properties-user_id", "product_properties", "user_id");
        $this->createIndex("idx-product_properties-product_id", "product_properties", "product_id");
        $this->createIndex("idx-product_properties-property_id", "product_properties", "property_id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("product_properties");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221227_091040_create_table_product_properties cannot be reverted.\n";

        return false;
    }
    */
}
