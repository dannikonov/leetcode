<?php

class Solution
{

    /**
     * @param Integer $n
     * @param Integer[][] $artifacts
     * @param Integer[][] $dig
     * @return Integer
     */
    function digArtifacts($n, $artifacts, $dig)
    {
        $digs = [];
        foreach ($dig as $d) {
            $digs[$d[0]][$d[1]] = 1;
        }

        $ans = 0;
        for ($i = 0; $i < count($artifacts); $i++) {
            list ($r1, $c1, $r2, $c2) = $artifacts[$i];

            $found = true;
            for ($ri = $r1; $ri <= $r2; $ri++) {
                for ($ci = $c1; $ci <= $c2; $ci++) {
                    if (!isset($digs[$ri][$ci])) {
                        $found = false;
                    }
                }
            }

            if ($found) {
                $ans++;
            }
        }

        return $ans;
    }
}