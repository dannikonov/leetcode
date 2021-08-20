<?php

class Solution
{
    function check($numbers)
    {
        return !count(
            array_filter($numbers, function ($item) {
                return $item > 1;
            })
        );
    }

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board)
    {
        for ($i = 0; $i < 9; $i++) {
            if (!$this->isValidRow($i, $board)) {
                echo 'invalid row' . $i;
                return false;
            }

            if (!$this->isValidColumn($i, $board)) {
                echo 'invalid col' . $i;
                return false;
            }
        }

        for ($r = 0; $r <= 6; $r += 3) {
            for ($c = 0; $c <= 6; $c += 3) {
                if (!$this->isValidSquare($r, $c, $board)) {
                    echo 'invalid square' . $r . $c;
                    return false;
                }
            }
        }

        return true;
    }

    function isValidRow($row_number, $board)
    {
        $numbers = array_fill(1, 9, 0);
        for ($c = 0; $c < 9; $c++) {
            if ($board[$row_number][$c] !== '.') {
                $numbers[$board[$row_number][$c]]++;
            }
        }

        return $this->check($numbers);
    }

    function isValidColumn($col_number, $board)
    {
        $numbers = array_fill(1, 9, 0);
        for ($r = 0; $r < 9; $r++) {
            if ($board[$r][$col_number] !== '.') {
                $numbers[$board[$r][$col_number]]++;
            }
        }

        return $this->check($numbers);
    }

    function isValidSquare($row_number, $col_number, $board)
    {
        $numbers = array_fill(1, 9, 0);
        for ($r = $row_number; $r < $row_number + 3; $r++) {
            for ($c = $col_number; $c < $col_number + 3; $c++) {
                if ($board[$r][$c] !== '.') {
                    $numbers[$board[$r][$c]]++;
                }
            }
        }

        return $this->check($numbers);
    }
}