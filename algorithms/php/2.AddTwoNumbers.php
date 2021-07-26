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
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $result = new ListNode(0);
        $head = &$result->next;
        $p1 = $l1;
        $p2 = $l2;
        $carry = 0;

        while ($p1 !== null || $p2 !== null) {
            $v1 = ($p1 !== null) ? $p1->val : 0;
            $v2 = ($p2 !== null) ? $p2->val : 0;
            $sum = $carry + $v1 + $v2;
            $carry = intdiv($sum, 10);
            $result->next = new ListNode($sum % 10);
            $result = $result->next;
            if ($p1 !== null) $p1 = $p1->next;
            if ($p2 !== null) $p2 = $p2->next;
        }

        if ($carry > 0) {
            $result->next = new ListNode($carry);
        }

        return $head;
    }
}