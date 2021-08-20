#include "TreeNode.h"

TreeNode *make_tree(vector<int> &array) {
    TreeNode *tree = nullptr;
    TreeNode *root = nullptr;

    insert(&tree, array, 0);
    root = tree;

//    for (auto item = array.begin(); item != array.end(); ) {
//    for (int i = 0; i < array.size(); i++) {
//        TreeNode *new_node;
//
//        if (root == nullptr) {
//            new_node = new TreeNode(*item);
//            root = tree;
//        } else {
//
//        }
//
//        if (first) {
//            tree = new TreeNode(item);
//            root = tree;
//            first = false;
//        } else {
//
//        }
//    }
    return root;
}

void insert(TreeNode **node, vector<int> &array, int index) {
    if (index < array.size()) {
        if (array[index] != -1) {
            *node = new TreeNode(array[index]);
            cout << "insert " << array[index] << endl;
        }

        insert(&(*node)->left, array, 2 * index + 1);
        insert(&(*node)->right, array, 2 * index + 2);
    }


}

//void insert(Btree **t, int *a, int index, int n)
//{
//    if (index < n) {
//        *t = malloc(sizeof(**t));
//
//        (*t)->value = a[index];
//        (*t)->left = NULL;
//        (*t)->right = NULL;
//
//        insert(&(*t)->left, a, 2 * index + 1, n);
//        insert(&(*t)->right, a, 2 * index + 2, n);
//    }
//}
//
void print_tree(TreeNode *node, int level) {
    if (node) {
        print_tree(node->left, level + 1);
        cout << node->val << "(" << level << ")" << endl;
        print_tree(node->right, level + 1);
    }
}
//
//int main(void)
//{
//    int a[] = {5, 2, 1, 6, 7, 3, 4};
//    Btree *t;
//
//    insert(&t, a, 0, 7);
//    print(t, 0);
//
//    // TODO: Clean up memory used by nodes
//
//    return 0;
//}


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