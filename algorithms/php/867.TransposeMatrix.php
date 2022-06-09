<?php

class Solution
{

    /**
     * @param  Integer[][]  $matrix
     * @return Integer[][]
     */
    function transpose($matrix)
    {
        $rows = count($matrix);
        $cols = count($matrix[0]);

        $m2 = [];
        for ($r = 0; $r < $rows; $r++) {
            for ($c = 0; $c < $cols; $c++) {
                $m2[$c][$r] = $matrix[$r][$c];
            }
        }

        return $m2;
    }
}