<?php

use yii\db\Migration;

/**
 * Class m221227_093610_update_table_product_categories
 */
class m221227_093610_update_table_product_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("product_categories", "category_name", $this->string(500)->after("user_id"));
        $this->addColumn("product_categories", "parent_id", $this->string()->after("category_name"));
        $this->addColumn("product_categories", "tree", $this->text()->after("parent_id"));
        $this->createIndex("idx-product_categories-parent_id", "product_categories", "parent_id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn("product_categories", "category_name");
        $this->dropColumn("product_categories", "parent_id");
        $this->dropColumn("product_categories", "tree");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221227_093610_update_table_product_categories cannot be reverted.\n";

        return false;
    }
    */
}
