<?php

class Solution
{

    /**
     * @param Integer $n
     * @return Integer
     */
    function countOrders($n)
    {
        $mod = 1e9 + 7;
        $ans = 1;

        for ($i = 1; $i < 2 * $n; $i += 2) {
            $ans = (($ans * $i) * ($i + 1) / 2) % $mod;
        }

        return $ans;
    }
}