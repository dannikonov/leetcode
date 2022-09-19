class Solution {
public:
    int count(vector<int>& nums, int m) {
        int cnt = 0;
        for (int i : nums) {
            if (i >= m) {
                cnt++;
            }
        }

        return cnt;
    }


    int specialArray(vector<int>& nums) {
        int l = 0;
        int r = nums.size();

        while (l <= r) {
            int m = l + (r - l) / 2;
            int cnt = count(nums, m);

            if (cnt == m) {
                return m;
            }

            if (m < cnt) {
                l = m + 1;
            }

            if (m > cnt) {
                r = m - 1;
            }
        }

        return - 1;
    }

};
