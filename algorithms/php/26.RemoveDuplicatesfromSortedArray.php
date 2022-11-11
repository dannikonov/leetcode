<?php

class Solution
{

    /**
     * @param  Integer[]  $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $j = 0;
        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i - 1] == $nums[$i]) {
                $j++;
            } else {
                $nums[$i - $j] = $nums[$i];
            }
        }

        return count($nums) - $j;
    }
}