<?php

namespace Maiksimov\Discount\Traits;

use Maiksimov\Discount\DiscountRelation;

trait DiscountTrait
{
    public function discount()
    {
        return $this->hasOne(DiscountRelation::class, 'model_id', 'id')->where('model', get_class($this));
    }
}