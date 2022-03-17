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
     * @param TreeNode $root
     * @return String[]
     */
    function binaryTreePaths($root)
    {
        $result = [];
        $this->backtrack($root, $result);

        return $result;
    }

    function backtrack($node, &$result, $tmp = [])
    {
        if (is_null($node)) {
            return;
        }

        $tmp[] = $node->val;
        if (is_null($node->left) && is_null($node->right)) {
            $result[] = join("->", $tmp);
        }

        $this->backtrack($node->left, $result, $tmp);
        $this->backtrack($node->right, $result, $tmp);

        array_pop($tmp);
    }
}