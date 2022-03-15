<?php

class Solution
{

    /**
     * @param Integer $poured
     * @param Integer $query_row
     * @param Integer $query_glass
     * @return Float
     */
    function champagneTower($poured, $query_row, $query_glass)
    {
        $row = [];
        $row[0] = $poured;

        for ($r = 0; $r <= $query_row; $r++) {
            $next = array_fill(0, $r + 2, 0);
            for ($c = 0; $c <= $r; $c++) {
                if ($row[$c] >= 1) {
                    $next[$c] += ($row[$c] - 1) / 2;
                    $next[$c + 1] += ($row[$c] - 1) / 2;
                    $row[$c] = 1;
                }
            }

            if ($r != $query_row) {
                $row = $next;
            }
        }

        return $row[$query_glass];
    }
}