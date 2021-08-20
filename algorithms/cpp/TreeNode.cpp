#include "TreeNode.h"

TreeNode *make_tree(vector<int> &array) {
    TreeNode *tree = nullptr;
    TreeNode *root = nullptr;

    insert(&tree, array, 0);
    root = tree;

    return root;
}

void insert(TreeNode **node, vector<int> &array, int index) {
    if (index < array.size()) {
        cout << "insert " << array[index] << endl;

        if (array[index] != -1) {
            *node = new TreeNode(array[index]);
            insert(&(*node)->left, array, 2 * index + 1);
            insert(&(*node)->right, array, 2 * index + 2);
        }
    }
}

void print_tree(TreeNode *node, int level) {
    if (node) {
        print_tree(node->left, level + 1);
        cout << node->val << "(" << level << ")" << endl;
        print_tree(node->right, level + 1);
    }
}

void remove_tree(TreeNode *tree) {
    if (tree == nullptr) {
        return;
    }

    TreeNode *curr = tree;

    while (curr != nullptr) {
        remove_tree(curr->left);
        remove_tree(curr->right);
        delete curr;
        curr = nullptr;
    }
}