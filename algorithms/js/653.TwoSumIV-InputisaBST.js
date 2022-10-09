/**
 * Definition for a binary tree node.
 * function TreeNode(val, left, right) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.left = (left===undefined ? null : left)
 *     this.right = (right===undefined ? null : right)
 * }
 */
/**
 * @param {TreeNode} root
 * @param {number} k
 * @return {boolean}
 */

var findTarget = function (root, k) {
    var map = new Set();

    let dfs = (node) => {
        if (!node) {
            return false;
        }

        if (map.has(k - node.val)) {
            return true;
        }

        map.add(node.val);

        return dfs(node.left, k) || dfs(node.right, k);
    };

    return dfs(root);
};
