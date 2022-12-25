<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Slider]].
 *
 * @see Slider
 */
class SliderQuery extends \common\models\base\ActiveQuery
{
    public function active()
    {
        $this->andWhere(["sliders.status" => Slider::STATUS_ACTIVE]);
        return $this;
    }

    /**
     * @inheritdoc
     * @return Slider[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Slider|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
