<?php

function mySqrt($x)
{
    $l = 0;
    $r = $x;

    while ($l < $r) {
        $m = $l + intdiv($r - $l, 2);
        if (pow($m, 2) <= $x && $x < pow($m + 1, 2)) {
            return $m;
        } else {
            if (pow($m, 2) < $x) {
                $l = $m + 1;
            } else {
                $r = $m - 1;
            }
        }
    }

    return $l;
}