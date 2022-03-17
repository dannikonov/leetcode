<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function scoreOfParentheses($s) {
        $stack = new SplStack();

        $score = 0;
        foreach(str_split($s) as $c) {
            if ($c === "(") {
                $stack->push($score);
                $score = 0;
            } else {
                $score = $stack->pop() + max($score * 2, 1);
            }
        };

        return $score;
    }
}