<?php

class Solution
{

    /**
     * @param  Integer[]  $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr)
    {
        $freq = [];
        foreach ($arr as $c) {
            if (!isset($freq[$c])) {
                $freq[$c] = 0;
            }

            $freq[$c]++;
        }

        return count($freq) === count(array_unique($freq));
    }
}