<?php

/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n)
    {
        $l = 1;
        $r = $n;

        while ($l <= $r) {
            $m = $l + intdiv($r - $l, 2);

            if ($this->isBadVersion($m)) {
                $r = $m - 1;
            } else {
                $l = $m + 1;
            }
        }

        return $l;
    }
}