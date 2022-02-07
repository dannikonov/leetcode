<?php

class Solution
{

    function findTheDifference($s, $t)
    {
        $s = array_reduce(str_split($s), function ($acc, $item) {
            $acc += ord($item);

            return $acc;
        }, 0);

        $t = array_reduce(str_split($t), function ($acc, $item) {
            $acc += ord($item);

            return $acc;
        }, 0);

        return chr($t - $s);
    }
}