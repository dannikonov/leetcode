<?php

function kWeakestRows($mat, $k)
{
    $soliders = array_map(function ($row) {
        return count(
            array_filter($row, function ($item) {
                return $item === 1;
            })
        );
    }, $mat);

// slower
//    $soliders = array_map(function ($row) {
//        return array_sum($row);
//    }, $mat);

    asort($soliders);

    return array_slice(array_keys($soliders), 0, $k);
}