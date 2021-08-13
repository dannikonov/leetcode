<?php

class Solution
{

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function setZeroes(&$matrix)
    {
        $row_indexes = [];
        $col_indexes = [];
        $rows = count($matrix);
        $cols = count($matrix[0]);

        for ($r = 0; $r < $rows; $r++) {
            for ($c = 0; $c < $cols; $c++) {
                if ($matrix[$r][$c] === 0) {
                    $row_indexes[$r] = 1;
                    $col_indexes[$c] = 1;
                }
            }
        }

        foreach (array_keys($row_indexes) as $r) {
            for ($c = 0; $c < $cols; $c++) {
                $matrix[$r][$c] = 0;
            }
        }

        foreach (array_keys($col_indexes) as $c) {
            for ($r = 0; $r < $rows; $r++) {
                $matrix[$r][$c] = 0;
            }
        }

        return $matrix;
    }
}