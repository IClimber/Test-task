<?php

namespace App\Classes;

class Test
{
    /**
     * @param Shape[] $shapes
     * @return float
     */
    public static function sumOfArea(array $shapes): float
    {
        $area = 0;
        foreach ($shapes as $shape) {
            $area += $shape->area();
        }

        return $area;
    }

    public static function isPalindrome(string $str): bool
    {
        return strrev($str) == $str;
    }
}
