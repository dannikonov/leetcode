<?php

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t)
    {
        if (strlen($s) > strlen($t)) {
            return false;
        }

        if (strlen($s) === 0) {
            return true;
        }

        $s = str_split(trim($s));
        $t = str_split(trim($t));

        $s_i = 0;
        for ($t_i = 0; $t_i < count($t); $t_i++) {
            if ($s[$s_i] === $t[$t_i]) {
                $s_i++;
            }
        }

        return $s_i === count($s);
    }
}