<?php

function twoCitySchedCost($costs)
{
    usort($costs, function ($a, $b) {
        return ($a[0] - $a[1]) > ($b[0] - $b[1]);
    });

    $sum = 0;
    $n = count($costs);
    for ($i = 0; $i < $n / 2; $i++) {
        $sum += $costs[$i][0] + $costs[$n - $i - 1][1];
    }

    return $sum;
}