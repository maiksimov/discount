<?php

namespace Maiksimov\Discount;

class DiscountSystem
{
    public static $discountModel = 'Maiksimov\Discount\Discount';
    public static $discountRelationModel = 'Maiksimov\Discount\DiscountRelation';

    public static function setDiscountModel(string $discountModel)
    {
        static::$discountModel = $discountModel;
    }

    public static function setDiscountRelationModel(string $discountRelationModel)
    {
        static::$discountRelationModel = $discountRelationModel;
    }

    public static function discountModel()
    {
        return static::$discountModel;
    }

    public static function discountRelationModel()
    {
        return static::$discountRelationModel;
    }

    public static function discount()
    {
        return new static::$discountModel;
    }

    public static function discountRelation()
    {
        return new static::$discountRelationModel;
    }
}
