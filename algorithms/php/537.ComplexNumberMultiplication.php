<?php

class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function complexNumberMultiply($num1, $num2) {
        list($r1, $im1) = $this->parseComplexNumber($num1);
        list($r2, $im2) = $this->parseComplexNumber($num2);


        return ($r1 * $r2 - $im1 * $im2) . "+" . ($r1 * $im2 + $r2 * $im1) . "i";
    }

    function parseComplexNumber($num) {
        preg_match('/(-?\d*)\+(-?\d*)i/', $num, $matches);
        list(, $r, $im) = $matches;

        return [$r, $im];
    }
}