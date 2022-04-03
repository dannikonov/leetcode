<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function nextPermutation(&$nums)
    {
        $n = count($nums);
        for ($i = $n - 2; $i >= 0; $i--) {
            if ($nums[$i] < $nums[$i + 1]) {
                break;
            }
        }

        if ($i < 0) {
            $nums = array_reverse($nums);
        } else {
            for ($j = $n - 1; $j > $i; $j--) {
                if ($nums[$j] > $nums[$i]) {
                    break;
                }
            }

            $tmp = $nums[$j];
            $nums[$j] = $nums[$i];
            $nums[$i] = $tmp;

            $nums = [
                ...array_slice($nums, 0, $i + 1),
                ...array_reverse(array_slice($nums, $i + 1, $n - $i - 1))
            ];
        }
    }
}