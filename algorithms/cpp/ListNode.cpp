#include "ListNode.h"

ListNode *make_list(vector<int> &array) {
    ListNode *list;
    ListNode *head;

    bool first = true;
    for (auto item : array) {
        if (first) {
            list = new ListNode(item);
            head = list;
            first = false;
        } else {
            list->next = new ListNode(item);
            list = list->next;
        }
    }

    return head;
}

void print_list(ListNode *list) {
    ListNode *curr = list;
    while (curr != nullptr) {
        cout << curr->val << ' ';
        curr = curr->next;
    }
    cout << endl;
}

void remove_list(ListNode *list) {
    ListNode *next;
    ListNode *curr = list;

    while (curr != nullptr) {
        next = curr->next;
        delete curr;
        curr = next;
    }
}