#ifndef LEETCODE_LISTNODE_H
#define LEETCODE_LISTNODE_H

#include "functions.h"

struct ListNode {
    int val;
    ListNode *next;

    ListNode() : val(0), next(nullptr) {}

    ListNode(int x) : val(x), next(nullptr) {}

    ListNode(int x, ListNode *next) : val(x), next(next) {}
};

ListNode *make_list(vector<int> &array);

void print_list(ListNode *list);

void remove_list(ListNode *list);

#endif //LEETCODE_LISTNODE_H
