<?php

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2)
    {
        sort($nums1);
        sort($nums2);

        $result = [];
        if (count($nums1) > count($nums2)) {
            [$nums1, $nums2] = [$nums2, $nums1];
        }

        $search = function ($value, $nums2) {
            $l = 0;
            $r = count($nums2) - 1;

            while ($l <= $r) {
                $m = $l + (($r - $l) >> 1);

                if ($nums2[$m] === $value) {
                    return $m;
                }

                if ($nums2[$m] < $value) {
                    $l = $m + 1;
                } else {
                    $r = $m - 1;
                }
            }

            return false;
        };

        foreach ($nums1 as $value) {
            $index = $search($value, $nums2);

            if ($index !== false) {
                ;
                $result[] = $value;
                array_splice($nums2, $index, 1);
            }
        }

        return $result;
    }
}