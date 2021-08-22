<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $map = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        $s = str_split($s);
        $i = 0;

        $int = 0;
        while ($i < count($s)) {
            if ($i !== count($s) - 1 && $map[$s[$i]] < $map[$s[$i + 1]]) {
                $int -= $map[$s[$i]];
            } else {
                $int += $map[$s[$i]];
            }

            $i++;
        }

        return $int;
    }
}