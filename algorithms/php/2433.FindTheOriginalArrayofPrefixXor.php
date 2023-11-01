<?php

class Solution
{

    /**
     * @param Integer[] $pref
     *
     * @return Integer[]
     */
    function findArray($pref)
    {
        $ans = [];
        $ans[0] = $pref[0];
        for ($i = 1; $i < count($pref); $i++) {
            $ans[$i] = $pref[$i] ^ $pref[$i - 1];
        }

        return $ans;
    }
}