<?php

class Solution
{

    /**
     * @param  String  $s
     * @return String
     */
    function removeDuplicates($s)
    {
        $stack = new SplStack();

        for ($i = 0; $i < strlen($s); $i++) {
            if (!$stack->isEmpty() && $stack->top() === $s[$i]) {
                $stack->pop();
            } else {
                $stack->push($s[$i]);
            }
        }

        $result = '';
        while (!$stack->isEmpty()) {
            $result = $stack->pop().$result;
        }

        return $result;
    }
}