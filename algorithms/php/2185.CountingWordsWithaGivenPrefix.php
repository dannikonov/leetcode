<?php

class Solution
{

    /**
     * @param String[] $words
     * @param String $pref
     * @return Integer
     */
    function prefixCount($words, $pref)
    {
        return
            count(
                array_filter(
                    $words,
                    function ($item) use ($pref) {
                        return strpos($item, $pref) === 0;
                    }
                )
            );
    }
}