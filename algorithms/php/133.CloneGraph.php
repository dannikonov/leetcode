<?php

/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $neighbors = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->neighbors = array();
 *     }
 * }
 */

class Solution
{
    /**
     * @param Node $node
     * @return Node
     */
    function cloneGraph($node)
    {
        return $this->dfs($node);
    }

    private function dfs($node, &$copy = [])
    {
        if (!$node) {
            return null;
        }

        if (!array_key_exists($node->val, $copy)) {
            $copy[$node->val] = new Node($node->val);
            $copy[$node->val]->neighbors = array_map(function ($neighbor) use (&$copy) {
                return $this->dfs($neighbor, $copy);
            }, $node->neighbors);
        }

        return $copy[$node->val];
    }
}