<?php

use yii\db\Migration;

/**
 * Class m221224_133626_create_table_products
 */
class m221224_133626_create_table_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("products", [
            "id" => $this->primaryKey(),
            "user_id" => $this->integer(),
            "product_title" => $this->string(500),
            "category_id" => $this->integer(),
            "product_slug" => $this->string(500),
            "product_excerpt" => $this->text(),
            "images" => $this->json(),
            "price" => $this->double()->defaultValue(0),
            "old_price" => $this->double()->defaultValue(0),
            "status" => $this->integer(),
            "publish_at" => $this->dateTime(),
            "created_at" => $this->dateTime(),
            "updated_at" => $this->dateTime(),
            "deleted_at" => $this->dateTime()
        ]);

        $this->createIndex("idx-products-user_id", "products", "user_id");
        $this->createIndex("idx-products-category_id", "products", "category_id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("products");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221224_133626_create_table_products cannot be reverted.\n";

        return false;
    }
    */
}
