<?php

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Integer
     */
    function minSteps($s, $t)
    {
        $as = array_fill(0, 26, 0);

        foreach (str_split($s) as $letter) {
            $as[ord($letter) - ord('a')]++;
        }

        $at = array_fill(0, 26, 0);
        foreach (str_split($t) as $letter) {
            $at[ord($letter) - ord('a')]++;
        }

        $result = 0;
        for ($i = 0; $i < 26; $i++) {
            $result += abs($as[$i] - $at[$i]);
        }

        return $result;
    }
}