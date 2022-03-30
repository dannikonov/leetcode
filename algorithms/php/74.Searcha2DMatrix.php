<?php

function searchMatrix($matrix, $target)
{
    $rows = count($matrix);
    $cols = count($matrix[0]);

    $l = 0;
    $r = $cols * $rows - 1;

    while ($l <= $r) {
        $m = intval(($l + $r) / 2);


        $mc = $m % $cols;
        $mr = intval($m / $cols);

        if ($target === $matrix[$mr][$mc]) {
            return true;
        }

        if ($target < $matrix[$mr][$mc]) {
            $r = $m - 1;
        }

        if ($target > $matrix[$mr][$mc]) {
            $l = $m + 1;
        }
    }

    return false;
}