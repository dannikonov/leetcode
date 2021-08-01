<?php

class Solution
{

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($height)
    {
        $count = count($height);
        $max_left = $max_right = array_fill(0, $count, 0);

        for ($i = 1; $i < $count; $i++) {
            $max_left[$i] = max($max_left[$i - 1], $height[$i - 1]);
        }

        for ($i = $count - 2; $i >= 0; $i--) {
            $max_right[$i] = max($max_right[$i + 1], $height[$i + 1]);
        }

        $sum = 0;
        for ($i = 0; $i < $count; $i++) {
            if (min($max_left[$i], $max_right[$i]) > $height[$i]) {
                $sum += min($max_left[$i], $max_right[$i]) - $height[$i];
            }
        }

        return $sum;
    }
}