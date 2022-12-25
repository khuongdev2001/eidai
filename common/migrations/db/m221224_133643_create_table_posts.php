<?php

use yii\db\Migration;

/**
 * Class m221224_133643_create_table_posts
 */
class m221224_133643_create_table_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("posts", [
            "id" => $this->primaryKey(),
            "user_id" => $this->integer(),
            "post_title" => $this->string(500),
            "category_id" => $this->integer(),
            "post_slug" => $this->string(500),
            "status" => $this->integer(),
            "publish_at" => $this->dateTime(),
            "created_at" => $this->dateTime(),
            "updated_at" => $this->dateTime(),
            "deleted_at" => $this->dateTime()
        ]);

        $this->createIndex("idx-posts-user_id", "posts", "user_id");
        $this->createIndex("idx-posts-category_id", "posts", "category_id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("posts");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221224_133643_create_table_posts cannot be reverted.\n";

        return false;
    }
    */
}
