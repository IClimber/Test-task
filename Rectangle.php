<?php

namespace App\Classes;

class Rectangle extends Shape
{
    protected float $a;
    protected float $b;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function area(): float
    {
        return $this->a * $this->b;
    }
}
