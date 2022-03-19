<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function halveArray($nums)
    {
        $heap = new SplMaxHeap();
        $sum = 0;
        foreach ($nums as $num) {
            $heap->insert($num);
            $sum += $num;
        }

        $half = $sum / 2;
        $cnt = 0;
        while ($sum > $half) {
            $cur = $heap->extract() / 2;
            $sum -= $cur;
            $heap->insert($cur);
            $cnt++;
        }

        return $cnt;
    }
}