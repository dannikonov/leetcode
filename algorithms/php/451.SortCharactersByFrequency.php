<?php

class Solution
{

    /**
     * @param  String  $s
     * @return String
     */
    function frequencySort($s)
    {
        $freq = [];
        foreach (str_split($s) as $char) {
            $freq[$char] = $freq[$char] ?? 0;
            $freq[$char]++;
        }

        arsort($freq);

        $str = '';
        foreach ($freq as $char => $n) {
            for ($i = 0; $i < $n; $i++) {
                $str .= $char;
            }
        }

        return $str;
    }
}