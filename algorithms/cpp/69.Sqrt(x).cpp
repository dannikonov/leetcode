class Solution {
public:
    int mySqrt(int x) {
        int l = 0;
        int r = x;

        while (l < r) {
            int m = l + (r - l) / 2;
            if (pow(m, 2) <= x && x < pow(m + 1, 2)) {
                return m;
            } else {
                if (pow(m, 2) < x) {
                    l = m + 1;
                } else {
                    r = m - 1;
                }
            }
        }

        return r;
    }
};
