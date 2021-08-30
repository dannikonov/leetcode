#include "vector"
#include "set"
#include "algorithm"
#include "functions.h"

using namespace std;

class Solution {
public:
    int maxCount(int m, int n, vector<vector<int>>& ops) {
        int min_x = m;
        int min_y = n;
        for (auto it : ops) {
            min_x = min(min_x, it[0]);
            min_y = min(min_y, it[1]);
        }

        return min_x * min_y;
    }
};

int main() {
    Solution s;
    int m = 3;
    int n = 3;
    vector<vector<int>> ops{{2, 2}, {3, 3}};
    cout << s.maxCount(m, n, ops);
}