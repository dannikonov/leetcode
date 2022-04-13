<?php

function findMin($nums)
{
    $l = 0;
    $r = count($nums) - 1;

    while ($nums[$l] > $nums[$r]) {
        $m = $l + (($r - $l) >> 1);

        if ($nums[$m] > $nums[$r]) {
            $l = $m + 1;
        } else {
            $r = $m;
        }
    }

    return $nums[$l];
}