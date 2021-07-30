<?php

class Solution
{

    /**
     * @param Integer[][] $mat
     * @return Integer[][]
     */
    function updateMatrix($mat)
    {
        $visited = [];
        $queue = new SplQueue();

        $rows = count($mat);
        $cols = count($mat[0]);
        for ($r = 0; $r < $rows; $r++) {
            $visited[$r] = [];
            for ($c = 0; $c < $cols; $c++) {
                if ($mat[$r][$c] === 0) {
                    $visited[$r][$c] = true;
                    $queue->enqueue([$r, $c]);
                }
            }
        }

        $directions = [
            [0, -1],
            [0, 1],
            [1, 0],
            [-1, 0],

        ];

        while (!$queue->isEmpty()) {
            list($currentRow, $currentCol) = $queue->dequeue();

            foreach ($directions as $direction) {
                $dr = $currentRow + $direction[0];
                $dc = $currentCol + $direction[1];

                if (0 <= $dr && $dr < $rows && 0 <= $dc && $dc < $cols && !(isset($visited[$dr][$dc]) && $visited[$dr][$dc])) {
                    $visited[$dr][$dc] = true;
                    $mat[$dr][$dc] = $mat[$currentRow][$currentCol] + 1;
                    $queue->enqueue([$dr, $dc]);
                }
            }
        }

        return $mat;
    }

}