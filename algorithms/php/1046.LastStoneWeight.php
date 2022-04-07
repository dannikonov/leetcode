<?php

class Solution
{

    /**
     * @param Integer[] $stones
     * @return Integer
     */
    function lastStoneWeight($stones)
    {
        $heap = new SplMaxHeap();
        foreach ($stones as $stone) {
            $heap->insert($stone);
        }

        while (!$heap->isEmpty()) {
            $x = $heap->extract();
            if (!$heap->isEmpty()) {
                $y = $heap->extract();
                if ($x != $y) {
                    $heap->insert($x - $y);
                } else {
                    $x = 0;
                }
            }
        }

        return $x;
    }
}