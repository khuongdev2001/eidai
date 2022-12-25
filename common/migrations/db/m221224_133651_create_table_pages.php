<?php

use yii\db\Migration;

/**
 * Class m221224_133651_create_table_pages
 */
class m221224_133651_create_table_pages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("pages", [
            "id" => $this->primaryKey(),
            "user_id" => $this->integer(),
            "status" => $this->integer(),
            "page_title" => $this->string(500),
            "page_content" => $this->text(),
            "created_at" => $this->dateTime(),
            "updated_at" => $this->dateTime(),
            "deleted_at" => $this->dateTime()
        ]);

        $this->createIndex("idx-pages-user_id", "pages", "user_id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("pages");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221224_133651_create_table_pages cannot be reverted.\n";

        return false;
    }
    */
}
