<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function countHillValley($nums) {
        $cnt = 0;

        for ($i = 1; $i < count($nums) - 1; $i++) {
            $l = $i - 1;
            $r = $i + 1;
            while ($nums[$l] === $nums[$i]) {
                $l--;
            }

            while ($nums[$r] === $nums[$i]) {
                $r++;
            }

            if (isset($nums[$l]) && isset($nums[$r])) {
                if ($nums[$l] < $nums[$i] && $nums[$i] > $nums[$r]) {
                    if ($nums[$i] != $nums[$i + 1]) {
                        $cnt++;
                    }
                }

                if ($nums[$l] > $nums[$i] && $nums[$i] < $nums[$r]) {
                    if ($nums[$i] != $nums[$i + 1]) {
                        $cnt++;
                    }
                }
            }
        }

        return $cnt;
    }
}