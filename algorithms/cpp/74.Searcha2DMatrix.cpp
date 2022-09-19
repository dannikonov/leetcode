class Solution {
public:
    bool searchMatrix(vector<vector<int>>& matrix, int target) {
        int rows = matrix.size();
        int cols = matrix[0].size();

        int l = 0;
        int r = cols * rows - 1;

        while (l <= r) {
            int m = l + (r - l) / 2;

            int mc = m % cols;
            int mr = m / cols;

            if (matrix[mr][mc] == target) {
                return true;
            }

            if (matrix[mr][mc] < target) {
                l = m + 1;
            }

            if (matrix[mr][mc] > target) {
                r = m - 1;
            }
        }

        return false;
    }
};
