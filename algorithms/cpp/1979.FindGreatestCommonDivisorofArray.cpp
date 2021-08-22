#include "vector"
#include "numeric"
#include "algorithm"
#include "functions.h"

using namespace std;

class Solution {
public:
    int findGCD(vector<int> &nums) {
        return __gcd(
                *min_element(nums.begin(), nums.end()),
                *max_element(nums.begin(), nums.end())
        );
    }
};

int main() {
    Solution s;
    vector<int> in{3, 2, 4};
    cout << s.findGCD(in);

    return 0;
}