<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $count = count($nums);

        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if ($nums[$i] + $nums[$j] === $target) {
                    return [$i, $j];
                }
            }
        }
    }
}

class Solution_advanced {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $keys = [];
        $count = count($nums);

        for ($i = 0; $i < $count; $i++) {
            $current = $target - $nums[$i];
            if (!array_key_exists($current, $keys)) {
                $keys[$nums[$i]] = 1;
            } else {
                return [$i, array_search($current, $nums)];
            }
        }

        return [];
    }
}