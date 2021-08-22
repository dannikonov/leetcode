#include "functions.h"
#include "TreeNode.h"

typedef long long ll;

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
    ll get_total_sum(TreeNode *node) {
        if (!node) {
            return 0;
        }
        ll sum_left_subtree = get_total_sum(node->left);
        ll sum_right_subtree = get_total_sum(node->right);
        return node->val + sum_left_subtree + sum_right_subtree;
    }

    ll dfs(TreeNode *node, ll total_sum, ll &product) {
        if (!node) {
            return 0;
        }

        ll sum_left_subtree = dfs(node->left, total_sum, product);
        ll sum_right_subtree = dfs(node->right, total_sum, product);

        ll sum_current_subtree = node->val + sum_left_subtree + sum_right_subtree;
        product = max(product, (total_sum - sum_current_subtree) * sum_current_subtree);

        return sum_current_subtree;
    }

    int maxProduct(TreeNode *root) {
        ll total_sum = get_total_sum(root);
        ll product = 0;

        dfs(root, total_sum, product);
        return product % 1000000007;
    }
};

int main() {
    vector<int> in1{1, 2, 3, 4, 5, 6}; // 110
    vector<int> in2{1, -1, 2, 3, 4, -1, -1, 5, 6}; // 90
    vector<int> in3{2, 3, 9, 10, 7, 8, 6, 5, 4, 11, 1}; // 1025
    vector<int> in4{1, 1}; // 1
    TreeNode *t1 = make_tree(in2);
    print_tree(t1);
    Solution s;
    cout << s.maxProduct(t1);

    remove_tree(t1);
}