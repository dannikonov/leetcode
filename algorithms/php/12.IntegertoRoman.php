<?php

class Solution
{

    /**
     * @param  Integer  $num
     * @return String
     */
    function intToRoman($num)
    {
        $mult = [
            1000 => 'M',
            900 => 'CM',
            500 => 'D',
            400 => 'CD',
            100 => 'C',
            90 => 'XC',
            50 => 'L',
            40 => 'XL',
            10 => 'X',
            9 => 'IX',
            5 => 'V',
            4 => 'IV',
            1 => 'I',
        ];

        $result = '';
        foreach ($mult as $v => $c) {
            while ($num >= $v) {
                $result .= $c;
                $num -= $v;
            }
        }

        return $result;
    }
}