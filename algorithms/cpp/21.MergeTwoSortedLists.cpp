#include "functions.h"
#include "ListNode.h"

using namespace std;

/**
 * Definition for singly-linked list.
 * struct ListNode {
 *     int val;
 *     ListNode *next;
 *     ListNode() : val(0), next(nullptr) {}
 *     ListNode(int x) : val(x), next(nullptr) {}
 *     ListNode(int x, ListNode *next) : val(x), next(next) {}
 * };
 */
class Solution {
public:
    ListNode *mergeTwoLists(ListNode *l1, ListNode *l2) {
        ListNode *result;
        if (l1 == nullptr) {
            return l2;
        }

        if (l2 == nullptr) {
            return l1;
        }

        if (l1->val < l2->val) {
            result = l1;
            result->next = mergeTwoLists(l1->next, l2);
        } else {
            result = l2;
            result->next = mergeTwoLists(l1, l2->next);
        }

        return result;
    }
};

int main() {
    vector<int> in1{1, 2, 4};
    vector<int> in2{1, 3, 4};
    ListNode *l1 = make_list(in1);
    ListNode *l2 = make_list(in2);

    print_list(l1);
    print_list(l2);

    Solution s;
    ListNode *result = s.mergeTwoLists(l1, l2);
    print_list(result);


    remove_list(l1);

    print_list(l1);
    print_list(l2);
    remove_list(l2);
}