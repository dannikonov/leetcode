<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function deleteAndEarn($nums)
    {
        $N = 10001;
        $freq = array_fill(0, $N, 0);

        foreach ($nums as $num) {
            $freq[$num]++;
        }

        $dp = [];
        $dp[0] = 0;
        $dp[1] = $freq[1];

        for ($i = 2; $i < $N; $i++) {
            $dp[$i] = max($dp[$i - 1], $dp[$i - 2] + $i * $freq[$i]);
        }

        return $dp[$N - 1];
    }
}