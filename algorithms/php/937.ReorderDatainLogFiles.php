<?php

class Solution
{

    /**
     * @param String[] $logs
     * @return String[]
     */
    function reorderLogFiles($logs)
    {
        $letter_logs = $digit_logs = [];
        foreach ($logs as $log) {
            if (preg_match('/^(\S+)\s([\D\s]+)/', $log)) {
                $letter_logs[] = $log;
            }

            if (preg_match('/^(\S+)\s([\d\s]+)/', $log)) {
                $digit_logs[] = $log;
            }
        }


        usort($letter_logs, function ($a, $b) {
            $a1 = substr($a, strpos($a, ' '));
            $b1 = substr($b, strpos($b, ' '));
            if ($a1 === $b1) {
                return $a > $b;
            } else {
                return $a1 > $b1;
            }
        });
        
        return array_merge(array_values($letter_logs), array_values($digit_logs));
    }
}