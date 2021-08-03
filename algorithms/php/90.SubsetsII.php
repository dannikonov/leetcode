<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsetsWithDup($nums) {
        sort($nums);
        $result = [[]];
        $rsize = 0;
        $index = 0;

        for ($i = 0; $i < count($nums); $i++) {
            $index = $i >= 1 && $nums[$i] === $nums[$i - 1]
                ? $rsize
                : 0;
            $rsize = count($result);

            for ($j = $index; $j < $rsize; $j++) {
                $temp = $result[$j];
                $temp[] = $nums[$i];
                $result[] = $temp;
            }
        }

        return $result;
    }

}