<?php

namespace App\Classes;

class Triangle extends Shape
{
    protected float $a;
    protected float $b;
    protected float $c;

    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function area(): float
    {
        $p = ($this->a + $this->b + $this->c) / 2;

        return sqrt($p * ($p - $this->a) * ($p - $this->c) * ($p - $this->c));
    }
}
