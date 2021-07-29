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
    function mergeTwoLists($h1, $h2) {
        if (!$h1) {
            return $h2;
        }

        if (!$h2) {
            return $h1;
        }

        if ($h1->val < $h2->val) {
            $result = $h1;
            $result->next = $this->mergeTwoLists($h1->next, $h2);

        } else {
            $result = $h2;
            $result->next = $this->mergeTwoLists($h1, $h2->next);
        }

        return $result;
    }

}