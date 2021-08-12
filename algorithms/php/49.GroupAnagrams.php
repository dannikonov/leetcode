<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $anagrams = [];
        foreach ($strs as $str) {
            $arr = str_split($str);
            sort($arr);

            $key = implode('', $arr);
            $anagrams[$key][] = $str;
        }

        return $anagrams;
    }
}