<?php

class Solution
{

    /**
     * @param Integer $num
     * @return Integer
     */
    function largestInteger($num)
    {
        $num = str_split($num);

        $odds = array_filter($num, function ($n) {
            return $n % 2;
        });
        sort($odds);

        $evens = array_filter($num, function ($n) {
            return !($n % 2);
        });
        sort($evens);

        $result = [];
        foreach ($num as $n) {
            $result[] = $n % 2 ? array_pop($odds) : array_pop($evens);
        }

        return implode("", $result);
    }
}