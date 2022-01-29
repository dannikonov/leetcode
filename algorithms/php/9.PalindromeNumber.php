<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        if ($x < 0) {
            return false;
        }

        $tmp = 0;
        for ($i = $x; $i >= 1; $i = (int)$i / 10) {
            $tmp = $tmp * 10 + $i % 10;
        }

        return $x === $tmp;
    }
}