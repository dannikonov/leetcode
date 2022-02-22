<?php

class Solution
{

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle)
    {
        $answer = 0;
        foreach (str_split($columnTitle) as $letter) {
            $answer *= 26;
            $answer += ord($letter) - ord('A') + 1;
        }

        return $answer;
    }
}