<?php

namespace Maiksimov\Discount\Traits;

use Maiksimov\Discount\DiscountSystem;
use Maiksimov\Discount\IDiscount;

trait DiscountTrait
{
    public function discount()
    {
        return $this->hasOne(DiscountSystem::discountRelationModel(), 'model_id', 'id')->where('model', get_class($this));
    }

    public function addDiscount(IDiscount $discount)
    {
        $this->discount()->save([
            'model' => get_class($this),
            'model_id' => $this->id,
            'discount_id' => $discount->id,
        ]);
    }
}