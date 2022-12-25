<?php

use yii\db\Migration;

/**
 * Class m221224_133613_create_table_product_categories
 */
class m221224_133613_create_table_product_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("product_categories", [
            "id" => $this->primaryKey(),
            "user_id" => $this->integer(),
            "category_title" => $this->string(500),
            "category_slug" => $this->string(500),
            "status" => $this->integer()->defaultValue(0),
            "created_at" => $this->dateTime(),
            "updated_at" => $this->dateTime(),
            "deleted_at" => $this->dateTime()
        ]);

        $this->createIndex("idx-product_categories_user_id", "product_categories", "user_id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("product_categories");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221224_133613_create_table_product_categories cannot be reverted.\n";

        return false;
    }
    */
}
