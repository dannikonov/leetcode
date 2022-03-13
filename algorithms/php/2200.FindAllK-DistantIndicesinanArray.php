<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $key
     * @param Integer $k
     * @return Integer[]
     */
    function findKDistantIndices($nums, $key, $k)
    {
        $js = [];
        foreach ($nums as $j => $num) {
            if ($num === $key) {
                $js[] = $j;
            }
        }

        $result = [];
        foreach ($nums as $i => $num) {
            foreach ($js as $j) {
                if (abs($i - $j) <= $k) {
                    $result[$i] = 1;
                }
            }
        }

        $result = array_keys($result);
        sort($result);

        return $result;
    }
}