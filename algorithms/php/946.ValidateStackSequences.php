<?php

class Solution
{

    /**
     * @param Integer[] $pushed
     * @param Integer[] $popped
     * @return Boolean
     */
    function validateStackSequences($pushed, $popped)
    {
        $stack = new SplStack();
        $i = 0;
        foreach ($pushed as $push) {
            $stack->push($push);

            while (!$stack->isEmpty() && $stack->top() === $popped[$i]) {
                $stack->pop();
                $i++;
            }
        }

        return $stack->isEmpty();
    }
}