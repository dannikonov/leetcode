/*
// Definition for a Node.
class Node {
public:
    int val;
    Node* next;
    Node* random;
    
    Node(int _val) {
        val = _val;
        next = NULL;
        random = NULL;
    }
};
*/

class Solution {
public:
    Node* copyRandomList(Node* head) {
        Node *i = head;
        Node *tmp;
        
        if (head == NULL) {
            return NULL;
        }
        
        while (i) {
            tmp = new Node(i->val);
            tmp->next = i->next;
            i->next = tmp;
            i = tmp->next;
        }
        
        i = head;
        
        Node *copy = head->next;
        while (i) {
            if (i->random) {
                i->next->random = i->random->next;
            }
            
            i = i->next->next;
        }
        
        i = head;
        while (i) {
            tmp = i->next;
            i->next = tmp->next;
            if (tmp->next) {
                tmp->next = tmp->next->next;
            }
            
            i = i->next;
        }
        
        return copy;
    }
};
