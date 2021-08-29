<?php

class Solution
{

    /**
     * @param Integer[] $startTime
     * @param Integer[] $endTime
     * @param Integer[] $profit
     * @return Integer
     */
    function jobScheduling($startTime, $endTime, $profit)
    {
        $jobs = [];

        for ($i = 0; $i < count($startTime); $i++) {
            $jobs[$i] = [
                'st' => $startTime[$i],
                'et' => $endTime[$i],
                'p' => $profit[$i],
            ];
        }

        usort($jobs, function ($a, $b) {
            return $a['et'] > $b['et'];
        });


        $dp = [];
        $dp[0] = $jobs[0]['p'];

        for ($i = 1; $i < count($jobs); $i++) {
            $cur = $jobs[$i]['p'];

            $l = 0;
            $r = $i - 1;
            $index = -1;

            while ($l <= $r) {
                $mid = intval($l + ($r - $l) / 2);
                if ($jobs[$i]['st'] >= $jobs[$mid]['et']) {
                    $index = $mid;
                    $l = $mid + 1;
                } else {
                    $r = $mid - 1;
                }
            }

            if ($index != -1) {
                $cur += $dp[$index];
            }

            $prev = $dp[$i - 1];

            $dp[$i] = max($cur, $prev);
        }

        return $dp[count($dp) - 1];
    }
}