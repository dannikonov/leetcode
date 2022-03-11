<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

    /**
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function rotateRight($head, $k)
    {
        $n = 1;
        $it = $head;
        while (isset($it->next)) {
            $n++;
            $it = $it->next;
        }

        $k = $k % $n;

        if ($n <= 1) {
            return $head;
        }

        if ($k == 0) {
            return $head;
        }

        $it->next = $head;
        $tmp = $head;

        while ($n != $k + 1) {
            $k++;
            $tmp = $tmp->next;
        }

        $head = $tmp->next;
        $tmp->next = null;

        return $head;
    }
}