#include "functions.h"
#include "TreeNode.h"
#include "set"

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
private:
    set<int> s;
public:
    bool findTarget(TreeNode *root, int k) {
        if (root == nullptr) {
            return false;
        }

        if (s.count(k - root->val)) {
            return true;
        }

        s.insert(root->val);

        return findTarget(root->left, k) || findTarget(root->right, k);
    }
};

int main() {
    vector<int> in1{2, 1, 3};
    int k = 4;

    TreeNode *t1 = make_tree(in1);
    print_tree(t1);
    Solution s;
    cout << s.findTarget(t1, k);

    remove_tree(t1);
}