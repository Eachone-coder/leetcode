/**
 * @param {string} S
 * @return {string}
 */
var removeOuterParentheses = function (S) {
    let answer = ''
    let height = 0
    for (const char of S) {
        let isLeft = char === '('
        if (isLeft) {
            height += 1
        } else {
            height -= 1
        }
        if ((isLeft && height === 1) || (!isLeft && height === 0)) {
        } else {
            answer += char
        }
    }
    return answer
};

console.log(removeOuterParentheses('(()())(())'));