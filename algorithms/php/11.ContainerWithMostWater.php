<?php

function maxArea($height)
{
    $l = 0;
    $r = count($height) - 1;
    $max = min($height[$l], $height[$r]) * ($r - $l);

    while ($l < $r) {
        if ($height[$l] < $height[$r]) {
            $l++;
        } else {
            $r--;
        }

        $max = max(min($height[$l], $height[$r]) * ($r - $l), $max);
    }

    return $max;
}