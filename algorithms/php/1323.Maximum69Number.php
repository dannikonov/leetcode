<?php

class Solution
{

    /**
     * @param  Integer  $num
     * @return Integer
     */
    function maximum69Number($num)
    {
        $pos = strpos($num, '6');
        echo $pos;
        if ($pos !== false) {
            $num = substr_replace($num, '9', $pos, 1);
        }

        return $num;
    }
}