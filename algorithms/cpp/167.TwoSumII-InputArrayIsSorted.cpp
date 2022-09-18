class Solution {
public:
    int binSearch(vector<int>& arr, int target, int l, int r) {
        while (l <= r) {
            int m = l + (r - l) / 2;

            if (arr[m] == target) {
                return m;
            } else if (arr[m] < target) {
                l = m + 1;
            } else {
                r = m - 1;
            }
        }

        return -1;
    }

    vector<int> twoSum(vector<int>& numbers, int target) {
        int n = numbers.size();
        for (int i = 0; i < n; i++) {
            int index = binSearch(numbers, target - numbers[i], i + 1, n - 1);
            if (index != -1) {
                return {i + 1, index + 1};
            }
        }

        return {};
    }
};