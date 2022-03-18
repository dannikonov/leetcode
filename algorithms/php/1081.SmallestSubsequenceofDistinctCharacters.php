<?php

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function smallestSubsequence($s)
    {
        $map = [];
        $visited = [];

        foreach (str_split($s) as $c) {
            if (!isset($map[$c])) {
                $map[$c] = 0;
            }
            $map[$c]++;
            $visited[$c] = false;
        }

        $stack = new SplStack();
        foreach (str_split($s) as $c) {
            $map[$c]--;
            if ($visited[$c]) {
                continue;
            }

            while (!$stack->isEmpty() && ord($stack->top()) > ord($c) && $map[$stack->top()] > 0) {
                $visited[$stack->pop()] = false;
            }
            $stack->push($c);
            $visited[$c] = true;;
        }

        $ans = "";
        while (!$stack->isEmpty()) {
            $ans = $stack->pop() . $ans;
        }

        return $ans;
    }
}