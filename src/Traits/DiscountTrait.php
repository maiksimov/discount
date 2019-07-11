<?php

namespace Maiksimov\Discount\Traits;

use Maiksimov\Discount\DiscountSystem;
use Maiksimov\Discount\DiscountContract;

trait DiscountTrait
{
    public function discount()
    {
        return $this->hasOne(DiscountSystem::discountRelationModel(), 'model_id', 'id')->where('model', get_class($this));
    }

    public function addDiscount(DiscountContract $discount)
    {
        $relation = DiscountSystem::discountRelation();
        $relation->model = get_class($this);
        $relation->model_id = $this->id;
        $relation->discount_id = $discount->id;
        return $relation->save();
    }
}