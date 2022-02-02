<?php

class Solution
{

    /**
     * @param String $s
     * @param String $p
     * @return Integer[]
     */
    function findAnagrams($s, $p)
    {
        $s_len = strlen($s);
        $p_len = strlen($p);

        if ($s_len < $p_len) {
            return [];
        }

        $answer = [];
        $s_freq = array_fill(0, 26, 0);
        $p_freq = array_fill(0, 26, 0);

        for ($i = 0; $i < $p_len; $i++) {
            $s_freq[ord($s[$i]) - ord('a')]++;
            $p_freq[ord($p[$i]) - ord('a')]++;
        }

        if ($s_freq == $p_freq) {
            $answer[] = 0;
        }

        for ($i = 1; $i < $s_len - $p_len + 1; $i++) {
            $s_freq[ord($s[$i - 1]) - ord('a')]--;
            $s_freq[ord($s[$i + $p_len - 1]) - ord('a')]++;

            if ($s_freq == $p_freq) {
                $answer[] = $i;
            }
        }

        return $answer;
    }
}