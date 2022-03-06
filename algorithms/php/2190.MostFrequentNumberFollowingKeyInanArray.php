<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $key
     * @return Integer
     */
    function mostFrequent($nums, $key)
    {
        $unique = array_unique($nums);

        $cnts = [];
        foreach ($unique as $target) {
            if (!isset($cnts[$target])) {
                $cnts[$target] = 0;
            }

            for ($i = 0; $i <= count($nums) - 2; $i++) {
                if ($nums[$i] === $key && $nums[$i + 1] === $target) {
                    $cnts[$target]++;
                }
            }
        }

        $max = 0;
        $key = 0;

//    var_dump($cnts);
        foreach ($cnts as $k => $cnt) {
            if ($cnt > $max) {
                $max = $cnt;
                $key = $k;
            }
        }


        return $key;
    }
}