<?php

class Solution
{

    /**
     * @param Integer[] $mapping
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortJumbled($mapping, $nums)
    {
        array_walk($nums, function (&$v, $k) use ($mapping) {
            $str = '';
            foreach (str_split($v) as $d) {
                $str .= $mapping[$d];
            }

            $v = [ltrim($str, 0), $v, $k];
        },         $nums);

//    var_dump($nums);

        uasort($nums, function ($a, $b) {
            if ($a[0] === $b[0]) {
                return ($a[2] < $b[2]) ? -1 : 1;
            }
            return ($a[0] < $b[0]) ? -1 : 1;
        });

        return array_column($nums, 1);
    }
}