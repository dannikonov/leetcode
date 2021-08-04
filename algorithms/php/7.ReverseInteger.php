<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        $sign = $x < 0
            ? -1
            : 1;


        $rev = intval(strrev($x)) * $sign;
        $max = 2147483647;

        return ((-1 * $max) - 1 > $rev || $max < $rev)
            ? 0
            : $rev;
    }

}
