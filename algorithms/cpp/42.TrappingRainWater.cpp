class Solution {
public:
    int trap(vector<int>& height) {
        int count = height.size();
        vector<int> maxLeft(count, 0);
        vector<int> maxRight(count, 0);

        for (int i = 1; i < count; i++) {
            maxLeft[i] = max(maxLeft[i - 1], height[i - 1]);
        }

        for (int i = count - 2; i >= 0; i--) {
            maxRight[i] = max(maxRight[i + 1], height[i + 1]);
        }

        int sum = 0;
        for (int i = 0; i < count; i++) {
            if (min(maxLeft[i], maxRight[i]) > height[i]) {
                sum += min(maxLeft[i], maxRight[i]) - height[i];
            }
        }

        return sum;
    }
};
