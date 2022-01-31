<?php

class Solution
{

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts)
    {
        $wealth = array_reduce($accounts, function ($carry, $item) {
            $carry[] = array_sum($item);

            return $carry;
        },                     []);

        return max($wealth);
    }
}