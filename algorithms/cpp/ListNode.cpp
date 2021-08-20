#include "ListNode.h"

ListNode *make_list(vector<int> &array) {
    ListNode *list = nullptr;
    ListNode *head = nullptr;

    for (auto item : array) {
        if (head == nullptr) {
            list = new ListNode(item);
            head = list;
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