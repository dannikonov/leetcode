<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        if (is_null($head) || is_null($head->next)) {
            return false;
        }

        $fast = $head;
        $slow = $head;

        while (!is_null($fast) && !is_null($slow)) {
            $fast = $fast->next->next;
            $slow = $slow->next;

            if ($fast === $slow) {
                return true;
            }
        }

        return false;
    }
}