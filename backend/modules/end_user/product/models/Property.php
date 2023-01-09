<?php

namespace backend\modules\end_user\product\models;

class Property extends \common\models\Property
{
    public function getPropertyChilds()
    {
        return $this->hasMany(ProductProperty::className(), ["property_id" => "id"])
            ->addSelect("*,COUNT(`product_id`) as `countProduct`")
            ->groupBy("property_value");
    }
}