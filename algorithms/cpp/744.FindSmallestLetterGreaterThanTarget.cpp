class Solution {
public:
    char nextGreatestLetter(vector<char>& letters, char target) {
        int l = 0;
        int r = letters.size() - 1;

        while (l <= r) {
            int m = l + (r - l) / 2;

            if (letters[m] <= target) {
                l = m + 1;
            } else {
                r = m - 1;
            }
        }

        if (l > letters.size() - 1) {
            l = 0;
        }

        return letters[l];
    }
};