class Solution {
public:
    int isValid(int num, vector<int>& arr2, int d) {
        long long l = 0;
        long long r = arr2.size();

        while (l <= r) {
            long long m = l + (r - l) / 2;
            if (abs(arr2[m] - num) <= d) {
                return false;
            }

            if (arr2[m] < num) {
                l = m + 1;
            } else {
                r = m - 1;
            }
         }

        return true;
    }

    int findTheDistanceValue(vector<int>& arr1, vector<int>& arr2, int d) {
        sort(arr2.begin(), arr2.end());

        int cnt = 0;
        for(auto i = arr1.begin(); i < arr1.end(); i++) {
            if (isValid(*i, arr2, d)) {
                cnt++;
            }
         }

        return cnt;
    }
};