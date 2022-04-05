<?php

class Solution
{

    /**
     * @param String[] $letters
     * @param String $target
     * @return String
     */
    function nextGreatestLetter($letters, $target)
    {
        $l = 0;
        $r = count($letters) - 1;
        $target = ord($target);

        while ($l <= $r) {
            $m = intdiv($l + $r, 2);

            if (ord($letters[$m]) <= $target) {
                $l = $m + 1;
            } else {
                $r = $m - 1;
            }
        }

        if ($l > count($letters) - 1) {
            $l = 0;
        }
        return $letters[$l];
    }
}