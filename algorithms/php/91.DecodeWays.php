<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function numDecodings($s)
    {
        $s = str_split($s);
        $n = count($s);
        $count = [];
        $count[$n] = 1;

        for ($i = $n - 1; $i >= 0; $i--) {
            if ($s[$i] === '0') {
                $count[$i] = 0;
            } else {
                $count[$i] = $count[$i + 1];
                if ($i < $n - 1) {
                    if ($s[$i] === '1' || ($s[$i] === '2' && $s[$i + 1] < '7')) {
                        $count[$i] += $count[$i + 2];
                    }
                }
            }
        }

        return $count[0];
    }
}