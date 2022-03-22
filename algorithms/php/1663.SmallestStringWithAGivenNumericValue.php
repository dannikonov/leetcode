<?php

class Solution
{

    /**
     * @param Integer $n
     * @param Integer $k
     * @return String
     */
    function getSmallestString($n, $k)
    {
        $s = '';
        while ($k) {
            $cur = min(26, $k - ($n - strlen($s)) + 1);
            $s .= chr($cur + ord('a') - 1);
            $k -= $cur;
        }

        return strrev($s);
    }
}