#include "vector"
#include "set"
#include "algorithm"
#include "functions.h"

using namespace std;

class Solution {
public:
    vector<int> twoSum(vector<int> &nums, int target) {
        set<int> keys;
        int n = nums.size();

        for (int i = 0; i < n; i++) {
            int current = target - nums[i];
            if (keys.find(current) == keys.end()) {
                keys.insert(nums[i]);
            } else {
                int second_index = find(nums.begin(), nums.end(), current) - nums.begin();
                return vector<int>{i, second_index};
            }
        }

        return vector<int>{};
    }
};

int main() {
    Solution s;
    vector<int> in{3, 2, 4};
    vector<int> out = s.twoSum(in, 6);
    print_vector(out);
}