<?php

class Solution
{

    /**
     * @param Integer[][] $matches
     * @return Integer[][]
     */
    function findWinners($matches)
    {
        $winners = $losers = [];

        foreach ($matches as $match) {
            if (!isset($winners[$match[0]])) {
                $winners[$match[0]] = 0;
            }

            if (!isset($losers[$match[1]])) {
                $losers[$match[1]] = 0;
            }

            $winners[$match[0]]++;
            $losers[$match[1]]++;
        }

        $onlyOnes = [];
        foreach ($losers as $k => $v) {
            if ($v === 1) {
                $onlyOnes[] = $k;
            }
        }
        sort($onlyOnes);

        $tmp = array_diff(array_keys($winners), array_keys($losers));
        sort($tmp);

        return [
            $tmp,
            $onlyOnes
        ];
    }
}