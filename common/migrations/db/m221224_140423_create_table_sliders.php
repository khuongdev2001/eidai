<?php

use yii\db\Migration;

/**
 * Class m221224_140423_create_table_sliders
 */
class m221224_140423_create_table_sliders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("sliders", [
            "id" => $this->primaryKey(),
            "user_id" => $this->integer(),
            "image" => $this->string(500),
            "link_to" => $this->string(500),
            "status" => $this->integer(),
            "priority" => $this->integer(),
            "created_at" => $this->dateTime(),
            "updated_at" => $this->dateTime(),
            "deleted_at" => $this->dateTime()
        ]);
        $this->createIndex("idx-sliders-user_id", "sliders", "user_id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("sliders");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221224_140423_create_table_sliders cannot be reverted.\n";

        return false;
    }
    */
}
