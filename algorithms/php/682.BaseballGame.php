<?php

class Solution
{

    /**
     * @param String[] $ops
     * @return Integer
     */
    function calPoints($ops)
    {
        $scores = [];
        $score = 0;
        foreach ($ops as $op) {
            switch ($op) {
                case "+":
                    $scores[] = $scores[count($scores) - 1] + $scores[count($scores) - 2];
                    break;
                case "D":
                    $scores[] = $scores[count($scores) - 1] * 2;
                    break;
                case "C":
                    array_pop($scores);
                    break;
                default:
                    $scores[] = $op;
            }
        }

        return array_sum($scores);
    }
}