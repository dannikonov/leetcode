<?php

class Solution
{

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function checkInclusion($s1, $s2)
    {
        if (strlen($s1) > strlen($s2)) {
            return false;
        }


        $targetFreq = array_fill(0, 26, 0);
        foreach (str_split($s1) as $char) {
            $targetFreq[ord($char) - 97]++;
        }

        $windowSize = strlen($s1);
        $s2 = str_split($s2);
        for ($i = 0; $i < count($s2) - $windowSize + 1; $i++) {
            $windowFreq = array_fill(0, 26, 0);;

            for ($j = 0; $j < $windowSize; $j++) {
                $char = ord($s2[$i + $j]) - 97;

                if (!isset($windowFreq[$char])) {
                    $windowFreq[$char] = 0;
                }
                $windowFreq[$char]++;

                if ($targetFreq == $windowFreq) {
                    return true;
                }
            }
        }

        return false;
    }
}