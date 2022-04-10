<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maximumProduct($nums, $k)
    {
        $heap = new SplMinHeap();
        foreach ($nums as $n) {
            $heap->insert($n);
        }

        while ($k) {
            $min = $heap->extract();
            $heap->insert(++$min);
            $k--;
        }

        $res = 1;
        while (!$heap->isEmpty()) {
            $res *= $heap->extract();
            $res %= 1000000007;
        }

        return $res;
    }
}