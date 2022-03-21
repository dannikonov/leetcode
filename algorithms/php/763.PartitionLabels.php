<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer[]
     */
    function partitionLabels($s)
    {
        $last = array_fill(ord('a'), 26, -1);
        $s = str_split($s);
        foreach ($s as $i => $c) {
            $last[ord($c)] = $i;
        }

        $ans = [];
        $start = $end = 0;
        foreach ($s as $i => $c) {
            $end = max($end, $last[ord($c)]);
            if ($i === $end) {
                $ans[] = $end - $start + 1;
                $start = $end + 1;
            }
        }

        return $ans;
    }
}