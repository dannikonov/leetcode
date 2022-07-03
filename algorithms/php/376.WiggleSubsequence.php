<?php

class Solution
{

    /**
     * @param  Integer[]  $nums
     * @return Integer
     */
    function wiggleMaxLength($nums)
    {
        $pos = $neg = [];

        $pos[0] = $neg[0] = 1;

        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] < $nums[$i - 1]) {
                $pos[$i] = $neg[$i - 1] + 1;
                $neg[$i] = $neg[$i - 1];
            } else {
                if ($nums[$i] > $nums[$i - 1]) {
                    $neg[$i] = $pos[$i - 1] + 1;
                    $pos[$i] = $pos[$i - 1];
                } else {
                    $pos[$i] = $pos[$i - 1];
                    $neg[$i] = $neg[$i - 1];
                }
            }
        }

        return max($pos[count($nums) - 1], $neg[count($nums) - 1]);
    }
}