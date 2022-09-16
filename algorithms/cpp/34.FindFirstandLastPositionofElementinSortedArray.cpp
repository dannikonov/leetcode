class Solution {
public:
    vector<int> searchRange(vector<int>& nums, int target) {
        return {findFirst(nums, target), findLast(nums, target)};
    }

    int findFirst(vector<int>& nums, int target) {
        int l = 0;
        int r = nums.size() - 1;
        int result = -1;
        while (l <= r) {
            int m = l + ((r - l) >> 1);

            if (nums[m] == target) {
                result = m;
                r = m - 1;
            } else {
                if (nums[m] < target) {
                    l = m + 1;
                } else {
                    r = m - 1;
                }
            }
        }

        return result;
    }

    int findLast(vector<int>& nums, int target) {
        int l = 0;
        int r = nums.size() - 1;
        int result = -1;
        while (l <= r) {
            int m = l + ((r - l) >> 1);

            if (nums[m] == target) {
                result = m;
                l = m + 1;
            } else {
                if (nums[m] < target) {
                    l = m + 1;
                } else {
                    r = m - 1;
                }
            }
        }

        return result;
    }
};