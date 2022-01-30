<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $original
     * @return Integer
     */
    function findFinalValue($nums, $original)
    {
        if (in_array($original, $nums)) {
            return $this->findFinalValue($nums, $original * 2);
        } else {
            return $original;
        }
    }
}