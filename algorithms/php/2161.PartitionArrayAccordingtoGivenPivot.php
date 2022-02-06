<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $pivot
     * @return Integer[]
     */
    function pivotArray($nums, $pivot)
    {
        return array_merge(
            array_filter($nums, function ($item) use ($pivot) {
                return $item < $pivot;
            }),
            array_filter($nums, function ($item) use ($pivot) {
                return $item == $pivot;
            }),
            array_filter($nums, function ($item) use ($pivot) {
                return $item > $pivot;
            })
        );
    }
}