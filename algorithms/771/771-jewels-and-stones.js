/*
给定字符串J 代表石头中宝石的类型，和字符串 S代表你拥有的石头。 S 中每个字符代表了一种你拥有的石头的类型，你想知道你拥有的石头中有多少是宝石。
J 中的字母不重复，J 和 S中的所有字符都是字母。字母区分大小写，因此"a"和"A"是不同类型的石头。

示例 1:
输入: J = "aA", S = "aAAbbbb"
输出: 3

示例 2:
输入: J = "z", S = "ZZ"
输出: 0

注意:
S 和 J 最多含有50个字母。
J 中的字符不重复。

*/
/**
 * @param {string} J
 * @param {string} S
 * @return {number}
 */
let numJewelsInStones = function (J, S) {
    let number = 0;
    let jades = J.split("");
    let stones = S.split("");
    for (let jade of jades) {
        for (let stone of stones) {
            if (stone === jade) {
                number++;
            }
        }
    }

    return number;
};

/**
 * 正则
 * @param {string} J 
 * @param {string} S 
 */
let numJewelsInStones_one = function (J, S) {
    let newS = S;
    for (let i = 0; i < J.length; i++) {
        newS = newS.replace(new RegExp(J[i], 'g'), "");
    }
    return S.length - newS.length;
};

/**
 * 哈希
 * @param {string} J 
 * @param {string} S 
 */
let numJewelsInStones_two = function (J, S) {
    let setJedwls = new Set(J);
    let number = 0;
    let len = S.length;
    for (let i = 0; i < len; i++) {
        if (setJedwls.has(S[i])) {
            number++;
        }
    }
    return number;
};


console.log('===============普通===============');
console.log(numJewelsInStones('aA', 'aAAbbbb'));
console.log(numJewelsInStones('z', 'ZZz'));
console.log('===============正则===============');
console.log(numJewelsInStones_one('aA', 'aAAbbbb'));
console.log(numJewelsInStones_one('z', 'ZZz'));
console.log('===============哈希===============');
console.log(numJewelsInStones_two('aA', 'aAAbbbb'));
console.log(numJewelsInStones_two('z', 'ZZz'));