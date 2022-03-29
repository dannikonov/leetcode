<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums)
    {
        $l = 1;
        $r = count($nums) - 1;

        while ($l <= $r) {
            $m = intval(($l + $r) / 2);

            $cnt = 0;
            foreach ($nums as $n) {
                if ($n <= $m) {
                    $cnt++;
                }
            }

            if ($cnt <= $m) {
                $l = $m + 1;
            } else {
                $r = $m - 1;
            }
        }

        return $l;
    }
}