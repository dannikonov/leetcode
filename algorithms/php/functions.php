<?php

class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

function makeList(Array $arr) {
    $list = new ListNode(0);
    $head = &$list->next;

    foreach ($arr as $item) {
        $list->next = new ListNode($item);
        $list = $list->next;
    }

    return $head;
}