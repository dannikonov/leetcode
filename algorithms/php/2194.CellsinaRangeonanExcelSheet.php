<?php

class Solution
{

    /**
     * @param String $s
     * @return String[]
     */
    function cellsInRange($s)
    {
        $cells = explode(":", $s);
        list ($c1, $r1) = str_split($cells[0]);
        list ($c2, $r2) = str_split($cells[1]);

        $ans = [];
        for ($c = ord($c1); $c <= ord($c2); $c++) {
            for ($r = $r1; $r <= $r2; $r++) {
                $ans[] = chr($c) . $r;
            }
        }

        return $ans;
    }
}