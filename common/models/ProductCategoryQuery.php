<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[ProductCategory]].
 *
 * @see ProductCategory
 */
class ProductCategoryQuery extends \common\models\base\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    public function parent()
    {
        return $this->andWhere(["parent_id" => 0]);
    }

    /**
     * @inheritdoc
     * @return ProductCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProductCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
