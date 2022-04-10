<?php

class Solution
{

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countNegatives($grid)
    {
        $rows = count($grid);
        $cols = count($grid[0]) - 1;

        $ans = 0;

        $count = function ($row) use ($cols) {
            $l = 0;
            $r = $cols;

            while ($l <= $r) {
                $m = $l + intval($r - $l, 2);
                if ($row[$m] >= 0) {
                    $l = $m + 1;
                } else {
                    $r = $m - 1;
                }
            }

            return $cols - $r;
        };

        foreach ($grid as $row) {
            $ans += $count($row);
        }

        return $ans;
    }
}