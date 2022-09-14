class Solution {
public:
    bool isPerfectSquare(int num) {
        if (num == 1) {
            return true;
        }

        long long l = 1;
        long long r = num / 2;

        while (l <= r) {
            long long m = l + (r - l) / 2;

            if (m * m == num) {
                return true;
            }

            if (m * m < num) {
                l = m + 1;
            }

            if (m * m > num) {
                r = m - 1;
            }
        }

        return false;
    }
};