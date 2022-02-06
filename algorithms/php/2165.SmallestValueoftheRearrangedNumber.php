<?php

class Solution
{

    /**
     * @param Integer $num
     * @return Integer
     */
    function smallestNumber($num)
    {
        $negative = $num < 0 ? true : false;
        if ($negative) {
            $num *= -1;
        }

        $l = str_split($num);

        $not_zeros = array_filter($l, function ($i) {
            return $i != 0;
        });

        if ($negative) {
            rsort($not_zeros);
        } else {
            sort($not_zeros);
        }


        $zeros = array_filter($l, function ($i) {
            return !$i;
        });


//
        $result = [];
        if (count($zeros)) {
            if ($negative) {
                array_push($result, ...$not_zeros);
                array_push($result, ...$zeros);
            } else {
                $result[] = array_shift($not_zeros);
                array_push($result, ...$zeros);
                array_push($result, ...$not_zeros);
            }
        } else {
            $result = $not_zeros;
        }

        $result = implode('', $result);

        if ($negative) {
            $result *= -1;
        }

        return $result;
    }
}