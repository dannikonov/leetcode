#include "stack"
#include "string"
#include "iostream"

using namespace std;

class Solution {
public:
    int scoreOfParentheses(string s) {
        stack<int> stack;

        int score = 0;
        for (int i = 0; i < s.length(); i++) {
            if (s[i] == '(') {
                stack.push(score);
                score = 0;
            } else {
                score = stack.top() + max(score * 2, 1);
                stack.pop();
            }
        }

        return score;
    }
};

int main() {
    Solution s;
    cout << s.scoreOfParentheses("()");
    cout << s.scoreOfParentheses("()()");
    cout << s.scoreOfParentheses("(())");
    cout << s.scoreOfParentheses("((()()))()");
}