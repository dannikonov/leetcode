<?php

class Solution
{

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function countBits($n)
    {
        $ans = array_fill(0, $n + 1, 0);
        for ($i = 0; $i <= $n; $i++) {
            if ($i % 2 === 0) {
                $ans[$i] = $ans[$i / 2];
            } else {
                $ans[$i] = $ans[$i / 2] + 1;
            }
        }

        return $ans;
    }
}