<?php

class Solution
{

    /**
     * @param String $version1
     * @param String $version2
     * @return Integer
     */
    function compareVersion($version1, $version2)
    {
        $v1 = explode(".", $version1);
        $v2 = explode(".", $version2);
        $cnt = max(count($v1), count($v2));

        for ($i = 0; $i < $cnt; $i++) {
            $arg_1 = array_key_exists($i, $v1) ? $v1[$i] : 0;
            $arg_1 = ltrim($arg_1, 0);
            $arg_2 = array_key_exists($i, $v2) ? $v2[$i] : 0;
            $arg_2 = ltrim($arg_2, 0);

            if ($arg_1 > $arg_2) {
                echo "1: " . $arg_1 . " 2:" . $arg_2;
                return 1;
            }
            if ($arg_1 < $arg_2) {
                return -1;
            }
        }

        return 0;
    }
}