<?php

class Solution
{

    /**
     * @param String $word
     * @return Integer
     */
    function minTimeToType($word)
    {
        $chars = str_split($word);
        $time = 0;
        $pos = 'a';
        foreach ($chars as $char) {
            if ($pos === $char) {
                $time++;
            } else {
                $time += min(abs(26 + ord($pos) - ord($char)) % 26, abs(26 + ord($char) - ord($pos)) % 26);
                $pos = $char;
                $time++;
            }
        }

        return $time;
    }
}