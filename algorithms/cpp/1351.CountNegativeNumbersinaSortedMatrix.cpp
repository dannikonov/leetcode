class Solution {
public:
    int count(vector<int>& row, int cols) {
        int l = 0;
        int r = cols;

        while (l <= r) {
            int m = l + (r - l) / 2;
            if (row[m] >= 0) {
                l = m + 1;
            } else {
                r = m - 1;
            }
        }

        return cols - r;
    }

    int countNegatives(vector<vector<int>>& grid) {
        int r = grid.size();
        int cols = grid[0].size() - 1;

        int ans = 0;
        for (auto row : grid) {
            ans += count(row, cols);
        }

        return ans;
    }

};