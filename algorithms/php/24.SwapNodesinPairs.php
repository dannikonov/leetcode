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
     * @return ListNode
     */
    function swapPairs($head)
    {
        if (!isset($head) || !isset($head->next)) {
            return $head;
        }

        $tmp = $head->next;
        $head->next = $tmp->next;
        $tmp->next = $head;
        $head = $tmp;

        $head->next->next = $this->swapPairs($head->next->next);

        return $head;
    }
}