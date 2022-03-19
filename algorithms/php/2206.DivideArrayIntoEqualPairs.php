<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function divideArray($nums)
    {
        $freq = [];
        foreach ($nums as $num) {
            if (!isset($freq[$num])) {
                $freq[$num] = 0;
            }

            $freq[$num]++;
        }

        $cnt = 0;
        foreach ($freq as $num) {
            $cnt += intval($num / 2);
        }

        return count($nums) / 2 === $cnt;
    }
}