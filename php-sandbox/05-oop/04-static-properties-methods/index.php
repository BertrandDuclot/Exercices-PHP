<?php

class Math {
    public static $pi = 3.14;

    public static function add(...$nums) {
        return array_sum($nums);
    }
}

// Static call
echo Math::$pi;
echo Math::add(1,2);