/**
 * @param {number[]} nums
 * @return {number}
 */
var longestConsecutive = function (nums) {
    let set = new Set(nums);

    let max = 0;
    nums.forEach(i => {
        if (set.has(i)) {
            let n = 1;
            let tmp = i;
            while (set.has(--tmp)) {
                set.delete(tmp);
                n++;
            }

            tmp = i;
            while (set.has(++tmp)) {
                set.delete(tmp);
                n++;
            }

            max = Math.max(max, n);
        }
    });

    return max;


};