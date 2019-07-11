<?php

namespace Maiksimov\Discount;

class DiscountRepository
{
    public function findById(int $id)
    {
        return DiscountSystem::discount()->find($id);
    }

    public function create($attributes)
    {
        return DiscountSystem::discount()->create($attributes);
    }
}
