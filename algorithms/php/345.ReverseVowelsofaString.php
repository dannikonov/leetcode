<?php

class Solution
{

    /**
     * @param  String  $s
     * @return String
     */
    function isVovel($c)
    {
        return in_array($c, ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U']);
    }

    function reverseVowels($s)
    {
        $s = str_split($s);
        $l = 0;
        $r = count($s) - 1;
        while ($l < $r) {
            while ($l < $r && !$this->isVovel($s[$l])) {
                $l++;
            }

            while ($l < $r && !$this->isVovel($s[$r])) {
                $r--;
            }

            $tmp = $s[$l];
            $s[$l] = $s[$r];
            $s[$r] = $tmp;

            $l++;
            $r--;
        }

        return implode('', $s);
    }
}