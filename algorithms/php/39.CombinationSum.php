<?php

class Solution
{

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target)
    {
        $ans = [];
        $sub = [];
        $this->backtrack(0, $sub, 0, $ans, $candidates, $target);

        return $ans;
    }

    function backtrack($l, &$sub, $sum, &$ans, $candidates, $target)
    {
        if ($sum > $target) {
            return;
        }

        if ($sum === $target) {
            array_push($ans, $sub);
            return;
        }
        for ($i = $l; $i < count($candidates); $i++) {
            array_push($sub, $candidates[$i]);
            $sum += $candidates[$i];
            $this->backtrack($i, $sub, $sum, $ans, $candidates, $target);
            array_pop($sub);
            $sum -= $candidates[$i];
        }
    }
}