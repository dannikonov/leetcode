<?php

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function minRemoveToMakeValid($s)
    {
        $stack = new SplStack();

        $s = str_split($s);
        for ($i = 0; $i < count($s); $i++) {
            if ($s[$i] === "(") {
                $stack->push($i);
            }

            if ($s[$i] === ")") {
                if (!$stack->isEmpty()) {
                    $stack->pop();
                } else {
                    $s[$i] = " ";
                }
            }
        }

        while (!$stack->isEmpty()) {
            $s[$stack->pop()] = "";
        }

        return implode(
            "",
            array_filter($s, function ($item) {
                return $item !== " ";
            })
        );
    }
}