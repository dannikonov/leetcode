class Solution {
public:
    int arrangeCoins(int n) {
        int l = 1;
        int r = n;

        while (l <= r) {
            long long m = l + (r - l) / 2;
            long long coins = m * (m + 1) / 2;

            if (coins == n) {
                return m;
            }

            if (coins < n) {
                l = m + 1;
            } else {
                r = m - 1;
            }
        }

        return r;
    }
};