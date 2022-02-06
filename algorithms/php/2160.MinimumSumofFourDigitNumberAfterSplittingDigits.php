<?php

class Solution
{

    /**
     * @param Integer $num
     * @return Integer
     */
    function minimumSum($num)
    {
        $a = str_split($num);
        sort($a);

        return ($a[0] * 10 + $a[2]) + ($a[1] * 10 + $a[3]);
    }
}