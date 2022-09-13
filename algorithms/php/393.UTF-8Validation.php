<?php

class Solution
{

    /**
     * @param  Integer[]  $data
     * @return Boolean
     */
    function validUtf8($data)
    {
        $numberOfBytes = 0;
        foreach ($data as $b) {
            if ($numberOfBytes === 0) {
                if ($b >> 5 === 0b110) {
                    $numberOfBytes = 1;
                } elseif ($b >> 4 === 0b1110) {
                    $numberOfBytes = 2;
                } elseif ($b >> 3 === 0b11110) {
                    $numberOfBytes = 3;
                } else {
                    if ($b >> 7 !== 0) {
                        return false;
                    }
                }
            } else {
                if ($b >> 6 !== 0b10) {
                    return false;
                }

                $numberOfBytes--;
            }
        }

        return $numberOfBytes === 0;
    }
}