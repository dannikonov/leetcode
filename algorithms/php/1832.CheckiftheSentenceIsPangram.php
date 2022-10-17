<?php

class Solution
{

    /**
     * @param  String  $sentence
     * @return Boolean
     */
    function checkIfPangram($sentence)
    {
        $frequency = [];

        foreach (str_split($sentence) as $c) {
            if (!isset($frequency[$c])) {
                $frequency[$c] = 0;
            }

            $frequency[$c]++;
        }

        return count($frequency) === 26;
    }
}