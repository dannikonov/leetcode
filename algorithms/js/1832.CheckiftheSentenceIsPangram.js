/**
 * @param {string} sentence
 * @return {boolean}
 */
var checkIfPangram = function (sentence) {
    let frequency = {};

    for (let c of sentence) {
        if (!frequency?.[c]) {
            frequency[c] = 0;
        }

        frequency[c]++;
    }


    return Object.values(frequency).length === 26;
};