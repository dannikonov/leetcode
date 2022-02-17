<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums)
    {
        $ans = [[]];
        $sub = [];
        $this->backtrack(0, $sub, $ans, $nums);

        return $ans;
    }

    function backtrack($l, &$sub, &$ans, $nums)
    {
        for ($i = $l; $i < count($nums); $i++) {
            array_push($sub, $nums[$i]);
            array_push($ans, $sub);
            $this->backtrack($i + 1, $sub, $ans, $nums);
            array_pop($sub);
        }
    }
}