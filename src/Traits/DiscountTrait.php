<?php

namespace Maiksimov\Discount\Traits;

use Maiksimov\Discount\DiscountSystem;

trait DiscountTrait
{
    public function discount()
    {
        return $this->hasOne(DiscountSystem::discountRelationModel(), 'model_id', 'id')->where('model', get_class($this));
    }
}