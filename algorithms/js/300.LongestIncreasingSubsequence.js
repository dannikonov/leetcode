/**
 * @param {number[]} nums
 * @return {number}
 */
var lengthOfLIS = function (nums) {
    let dp = new Array(nums.length).fill(1);
    let max = 1;

    for (let i = 1; i < nums.length; i++) {
        for (let prev = 0; prev < i; prev++) {
            if (nums[i] > nums[prev]) {
                dp[i] = Math.max(dp[i], 1 + dp[prev]);
            }
        }

        max = Math.max(max, dp[i]);
    }

    return max;
};

