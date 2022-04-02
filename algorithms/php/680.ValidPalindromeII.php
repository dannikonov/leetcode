<?php

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function validPalindrome($s)
    {
        $isValid = function ($s, $l, $r) {
            while ($l < $r) {
                if (isset($s[$l]) && isset($s[$r]) && $s[$l] != $s[$r]) {
                    return false;
                }

                $l++;
                $r--;
            }

            return true;
        };

        $s = str_split($s);
        $l = 0;
        $r = count($s) - 1;

        while ($l < $r) {
            if ($s[$l] != $s[$r]) {
                return $isValid($s, $l + 1, $r) || $isValid($s, $l, $r - 1);
            }

            $l++;
            $r--;
        }
        return true;
    }
}