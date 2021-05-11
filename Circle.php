<?php

namespace App\Classes;

class Circle extends Shape
{
    protected float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return pi() * ($this->radius ** 2);
    }
}
