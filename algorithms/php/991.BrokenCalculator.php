<?php

class Solution
{

    /**
     * @param Integer $startValue
     * @param Integer $target
     * @return Integer
     */
    function brokenCalc($startValue, $target)
    {
        if ($startValue >= $target) {
            return $startValue - $target;
        }

        if ($target % 2 === 0) {
            return 1 + $this->brokenCalc($startValue, $target / 2);
        }

        return 1 + $this->brokenCalc($startValue, $target + 1);
    }
}