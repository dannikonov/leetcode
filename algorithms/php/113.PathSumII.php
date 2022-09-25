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
     * @param  TreeNode  $root
     * @param  Integer  $targetSum
     * @return Integer[][]
     */
    function pathSum($root, $targetSum)
    {
        $paths = [];
        $dfs = function ($node, $path, $sum) use (&$dfs, &$paths) {
            if (!isset($node)) {
                return;
            }

            array_push($path, $node->val);
            if (!isset($node->left) && !isset($node->right) && $sum === $node->val) {
                $paths[] = $path;
            }

            $dfs($node->left, $path, $sum - $node->val);
            $dfs($node->right, $path, $sum - $node->val);
            array_pop($path);
        };

        $dfs($root, [], $targetSum);

        return $paths;
    }

}