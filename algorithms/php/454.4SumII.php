<?php

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @param Integer[] $nums3
     * @param Integer[] $nums4
     * @return Integer
     */
    function fourSumCount($nums1, $nums2, $nums3, $nums4)
    {
        $answers = 0;
        $n = count($nums1);

        $map12 = [];

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $map12[$nums1[$i] + $nums2[$j]]++;
            }
        }

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($map12[0 - $nums3[$i] - $nums4[$j]]) {
                    $answers += $map12[0 - $nums3[$i] - $nums4[$j]];
                }
            }
        }

        return $answers;
    }
}