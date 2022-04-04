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
    ListNode* swapNodes(ListNode* head, int k) {
        ListNode* l = head;
        ListNode* r = head;
        ListNode* cur = head;
        int i = 1;

        while (cur != NULL) {
            if (i < k) {
                l = l->next;
            }

            if (i > k) {
                r = r->next;
            }

            cur = cur->next;
            i++;
        }

        int tmp = l->val;
        l->val = r->val;
        r->val = tmp;

        return head;
    }
};