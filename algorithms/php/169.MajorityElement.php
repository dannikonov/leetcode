<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums)
    {
        foreach ($nums as $value) {
            if (!isset($hashmap[$value])) {
                $hashmap[$value] = 0;
            }

            $hashmap[$value]++;
        }

        foreach ($hashmap as $key => $value) {
            if ($value > count($nums) / 2) {
                return $key;
            }
        }
    }
}