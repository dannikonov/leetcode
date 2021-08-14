<?php

class Solution
{

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function addStrings($num1, $num2)
    {
        $result = [];
        $carry = 0;

        $num1_arr = str_split(strrev($num1));
        $num2_arr = str_split(strrev($num2));
        $n1 = count($num1_arr);
        $n2 = count($num2_arr);

        $it1 = $it2 = 0;
        while ($it1 < $n1 || $it2 < $n2) {
            $cur = $carry;
            if ($it1 < $n1) {
                $cur += (int)$num1_arr[$it1];
            }

            if ($it2 < $n2) {
                $cur += (int)$num2_arr[$it2];
            }

            if ($cur > 9) {
                $cur -= 10;
                $carry = 1;
            } else {
                $carry = 0;
            }

            $result[] = $cur;

            $it1++;
            $it2++;
        }

        if ($carry) {
            $result[] = $carry;
        }

        return implode(array_reverse($result));
    }
}