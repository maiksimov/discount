<?php

namespace Maiksimov\Discount;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model implements IDiscount
{
    protected $table = 'discounts';
}
