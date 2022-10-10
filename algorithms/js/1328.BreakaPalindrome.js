/**
 * @param {string} palindrome
 * @return {string}
 */
var breakPalindrome = function (palindrome) {
    let l = palindrome.length;
    if (l === 1) {
        return '';
    }

    for (let i = 0; i < Math.floor(l / 2); i++) {
        if (palindrome[i] !== 'a') {
            return palindrome.slice(0, i) + 'a' + palindrome.slice(i + 1, l);
        }
    }

    return palindrome.slice(0, l - 1) + 'b';
};