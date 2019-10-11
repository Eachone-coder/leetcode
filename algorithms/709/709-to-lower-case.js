/**
 * @param {string} str
 * @return {string}
 */
var toLowerCase = function (str) {
    let newStr = '';
    let len = str.length;
    for (let index = 0; index < len; index++) {
        let ascii = str[index].charCodeAt();
        if (ascii >= 65 && ascii <= 90) {
            newStr += String.fromCharCode(ascii + 32);
        } else {
            newStr += str[index];
        }
    }

    return newStr;
};

console.log(toLowerCase('al&phaBET'));