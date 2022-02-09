<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findPairs($nums, $k) {
        $map = [];
        foreach ($nums as $value) {
            if (!isset($map[$value])) {
                $map[$value] = 0;
            }

            $map[$value]++;
        }

        $count = 0;
        foreach ($map as $key => $value) {
            if ($k === 0) {
                if ($value >= 2) {
                    $count++;
                }
            } else {
                if (isset($map[$key + $k])) {
                    $count++;
                }
            }
        }

        return $count;
    }
}