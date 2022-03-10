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
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        if (!isset($head) && !isset($head->next)) {
            return $head;
        }

        if ($head->val === $head->next->val) {
            $tmp = $head->val;
            while (isset($head) && $tmp === $head->val) {
                $head = $head->next;
            }

            return $this->deleteDuplicates($head);
        } else {
            $head->next = $this->deleteDuplicates($head->next);
        }

        return $head;
    }
}