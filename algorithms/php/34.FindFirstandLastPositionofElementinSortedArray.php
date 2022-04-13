<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target)
    {
        $findFirst = function ($target) use ($nums) {
            $l = 0;
            $r = count($nums) - 1;
            $result = -1;
            while ($l <= $r) {
                $m = $l + (($r - $l) >> 1);

                if ($nums[$m] === $target) {
                    $result = $m;
                    $r = $m - 1;
                } else {
                    if ($nums[$m] < $target) {
                        $l = $m + 1;
                    } else {
                        $r = $m - 1;
                    }
                }
            }

            return $result;
        };

        $findLast = function ($target) use ($nums) {
            $l = 0;
            $r = count($nums) - 1;
            $result = -1;
            while ($l <= $r) {
                $m = $l + (($r - $l) >> 1);

                if ($nums[$m] === $target) {
                    $result = $m;
                    $l = $m + 1;
                } else {
                    if ($nums[$m] < $target) {
                        $l = $m + 1;
                    } else {
                        $r = $m - 1;
                    }
                }
            }

            return $result;
        };

        return [$findFirst($target), $findLast($target)];
    }
}