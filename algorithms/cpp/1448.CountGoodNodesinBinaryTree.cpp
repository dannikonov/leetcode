#include "functions.h"
#include "TreeNode.h"

using namespace std;

/**
 * Definition for a binary tree node.
 * struct TreeNode {
 *     int val;
 *     TreeNode *left;
 *     TreeNode *right;
 *     TreeNode() : val(0), left(nullptr), right(nullptr) {}
 *     TreeNode(int x) : val(x), left(nullptr), right(nullptr) {}
 *     TreeNode(int x, TreeNode *left, TreeNode *right) : val(x), left(left), right(right) {}
 * };
 */
class Solution {
public:
    int goodNodes(TreeNode *root) {
        return dfs(root);
    }

    int dfs(TreeNode *node, int max = INT32_MIN) {
        int good = 0;

        if (node == nullptr) {
            return 0;
        }

        if (node->val >= max) {
            good++;
            max = node->val;
        }

        return good + dfs(node->left, max) + dfs(node->right, max);
    }
};

int main() {
    vector<int> in1{3,3,-1,4,2};
    TreeNode *t1 = make_tree(in1);
    print_tree(t1);
    Solution s;
    cout << s.goodNodes(t1);

    remove_tree(t1);
}