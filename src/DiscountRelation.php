<?php

namespace Maiksimov\Discount;

use Illuminate\Database\Eloquent\Model;

class DiscountRelation extends Model
{
    protected $table = 'discount_relations';

    public function discount()
    {
        return $this->belongsTo(Discount::class, 'discount_id', 'id');
    }
}
