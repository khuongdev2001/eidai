<?php

use yii\db\Migration;

/**
 * Class m221226_151049_update_table_posts
 */
class m221226_151049_update_table_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("posts", "post_content", $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn("posts", "post_content");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221226_151049_update_table_posts cannot be reverted.\n";

        return false;
    }
    */
}
