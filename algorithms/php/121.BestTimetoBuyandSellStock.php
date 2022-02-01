<?php

class Solution
{

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices)
    {
        $profit = 0;
        $current = 0;
        for ($i = 1; $i < count($prices); $i++) {
            $current += $prices[$i] - $prices[$i - 1];
            $current = max(0, $current);
            $profit = max($current, $profit);
        }

        return $profit;
    }
}