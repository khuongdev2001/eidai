<?php

use yii\db\Migration;

/**
 * Class m221227_090421_create_table_properties
 */
class m221227_090421_create_table_properties extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("properties", [
            "id" => $this->primaryKey(),
            "user_id" => $this->integer(),
            "property_name" => $this->string(500),
            "property_slug" => $this->string(500),
            "status" => $this->integer(),
            "created_at" => $this->dateTime(),
            "updated_at" => $this->dateTime(),
            "deleted_at" => $this->dateTime()
        ]);
        $this->createIndex("idx-properties-user_id", "properties", "user_id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("properties");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221227_090421_create_table_properties cannot be reverted.\n";

        return false;
    }
    */
}
