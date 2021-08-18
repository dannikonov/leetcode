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

    function dfs($node, $path = []) {
        if (empty($path)) {
            $path[] = $node->val;
            return 1 + $this->dfs($node->left, $path) + $this->dfs($node->right, $path);
        }

        if ($node) {
            $cnt = 0;
            if ($this->array_test($path, $node->val)) {
                $cnt = 1;
                echo $node->val;
            }

            $path[] = $node->val;

            return $cnt + $this->dfs($node->left, $path) + $this->dfs($node->right, $path);
        }
    }

    function array_test($array, $value) {
        return !in_array(false, array_map(function($item) use ($value) {
            return $item <= $value;
        }, $array));
    }
}