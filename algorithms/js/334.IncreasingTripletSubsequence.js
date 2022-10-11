/**
 * @param {number[]} nums
 * @return {boolean}
 */
var increasingTriplet = function (nums) {
    let v1 = Number.MAX_SAFE_INTEGER, v2 = Number.MAX_SAFE_INTEGER;
    for (let n of nums) {
        if (n <= v1) {
            v1 = n;
        } else if (n <= v2) {
            v2 = n
        } else {
            return true;
        }
    }
    return false;
};