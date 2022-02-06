<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortEvenOdd($nums) {
        $odd = array_filter($nums, function ($i) {
            return $i % 2 === 0;
        }, ARRAY_FILTER_USE_KEY);

        sort($odd);

        $even = array_filter($nums, function ($i) {
            return $i % 2 === 1;
        }, ARRAY_FILTER_USE_KEY);

        rsort($even);

        $result = [];
        foreach ($odd as $k => $v) {
            $result[$k * 2] = $v;
        }

        foreach ($even as $k => $v) {
            $result[$k * 2 + 1] = $v;
        }

        ksort($result);

        return $result;
    }
}