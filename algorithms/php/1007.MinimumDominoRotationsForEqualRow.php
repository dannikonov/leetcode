<?php

class Solution
{

    /**
     * @param Integer[] $tops
     * @param Integer[] $bottoms
     * @return Integer
     */
    function minDominoRotations($tops, $bottoms)
    {
        $n = count($tops);

        $freqTop = array_fill(1, 6, 0);
        $freqBottom = array_fill(1, 6, 0);
        $same = array_fill(1, 6, 0);

        for ($i = 0; $i < $n; $i++) {
            $freqTop[$tops[$i]]++;
            $freqBottom[$bottoms[$i]]++;

            if ($tops[$i] === $bottoms[$i]) {
                $same[$tops[$i]]++;
            }
        }

        for ($i = 1; $i <= 6; $i++) {
            if ($freqTop[$i] + $freqBottom[$i] - $same[$i] === $n) {
                return min($freqTop[$i] - $same[$i], $freqBottom[$i] - $same[$i]);
            }
        }

        return -1;
    }
}