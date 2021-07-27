<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $array = array_merge($nums1, $nums2);
        sort($array);

        $length = count($array);
        if ($length % 2 === 0) {
            return ($array[$length / 2 - 1] + $array[$length / 2]) / 2;
        } else {
            return $array[floor($length / 2)];
        }
    }
}