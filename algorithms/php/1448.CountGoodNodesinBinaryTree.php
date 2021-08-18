<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function goodNodes($root) {
        return $this->dfs($root);
    }

    function dfs($node, $max = -INF) {
        if (!isset($node)) {
            return 0;
        }

        $good = 0;

        if ($node->val >= $max) {
            $good++;
            $max = $node->val;
        }

        return $good + $this->dfs($node->left, $max) + $this->dfs($node->right, $max);
    }
}