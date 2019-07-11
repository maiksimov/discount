<?php

namespace Maiksimov\Discount;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model implements DiscountContract
{
    protected $table = 'discounts';
}
