<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = new SplStack();
        foreach (str_split($s) as $char) {
            if (in_array($char, ['{', '[', '('])) {
                $stack->push($char);
            }

            if (in_array($char, ['}', ']', ')'])) {
                if ($stack->isEmpty()) {
                    return false;
                }

                if (($char === '}' && $stack->top() === '{')
                    || ($char === ']' && $stack->top() === '[')
                    || ($char === ')' && $stack->top() === '(')) {
                    $stack->pop();
                } else {
                    return false;
                }
            }
        }

        return $stack->isEmpty();
    }
}