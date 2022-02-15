<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums)
    {
        $xor = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $xor ^= $nums[$i];
        }

        return $xor;
    }
}