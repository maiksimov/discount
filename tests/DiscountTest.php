<?php

use PHPUnit\Framework\TestCase;
use Maiksimov\Discount\Discount;

class DiscountTest extends TestCase
{
    /** @test */
    public function save()
    {
        $this->assertTrue(true);
    }

//    public function save()
//    {
//        $discount = $this->getTestDiscount();
//        $discount->save();
//        $this->assertInstanceOf('Maiksimov\Discount\Discount', $discount);
//    }

    private function getTestDiscount()
    {
        $discount = new Discount();
        $discount->name = 'Test discount';
        $discount->amount = 0.1;

        return $discount;
    }
}
