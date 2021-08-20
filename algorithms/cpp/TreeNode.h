#ifndef LEETCODE_TREENODE_H
#define LEETCODE_TREENODE_H

#include "functions.h"

struct TreeNode {
    int val;
    TreeNode *left;
    TreeNode *right;

    TreeNode() : val(0), left(nullptr), right(nullptr) {}

    TreeNode(int x) : val(x), left(nullptr), right(nullptr) {}

    TreeNode(int x, TreeNode *left, TreeNode *right) : val(x), left(left), right(right) {}
};

TreeNode *make_tree(vector<int> &array);

void insert(TreeNode **node, vector<int> &array, int index);

void print_tree(TreeNode *tree, int level = 0);

void remove_tree(TreeNode *tree);

#endif //LEETCODE_TREENODE_H
