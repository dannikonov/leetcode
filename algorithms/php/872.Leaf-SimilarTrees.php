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
class Solution
{

    /**
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return Boolean
     */
    function leafSimilar($root1, $root2)
    {
        $leafs1 = [];
        $leafs2 = [];
        $this->dfs($root1, $leafs1);
        $this->dfs($root2, $leafs2);

        return count(array_diff_assoc($leafs1, $leafs2)) === 0
            && count(array_diff_assoc($leafs2, $leafs1)) === 0;
    }

    function dfs($root, &$leafs)
    {
        if ($root) {
            if (!isset($root->left) && !isset($root->right)) {
                $leafs[] = $root->val;
            } else {
                $this->dfs($root->left, $leafs);
                $this->dfs($root->right, $leafs);
            }
        }
    }
}