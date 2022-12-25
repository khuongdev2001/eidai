<?php

use yii\db\Migration;

/**
 * Class m221224_133639_create_table_post_categories
 */
class m221224_133639_create_table_post_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("post_categories", [
            "id" => $this->primaryKey(),
            "user_id" => $this->integer(),
            "category_title" => $this->string(500),
            "category_slug" => $this->string(500),
            "status" => $this->integer()->defaultValue(0),
            "created_at" => $this->dateTime(),
            "updated_at" => $this->dateTime(),
            "deleted_at" => $this->dateTime()
        ]);

        $this->createIndex("idx-post_categories_user_id", "post_categories", "user_id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("post_categories");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221224_133639_create_table_post_categories cannot be reverted.\n";

        return false;
    }
    */
}
