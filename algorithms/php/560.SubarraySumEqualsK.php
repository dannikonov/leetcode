<?php

function subarraySum($nums, $k)
{
    $sum = 0;
    $sums = [];
    $cnt = 0;

    foreach ($nums as $num) {
        $sum += $num;

        if (isset($sums[$sum - $k])) {
            $cnt += $sums[$sum - $k];
        }

        if (!isset($sums[$sum])) {
            $sums[$sum] = 0;
        }
        $sums[$sum]++;
    }

    if (isset($sums[$k])) {
        $cnt += $sums[$k];
    }

    return $cnt;
}