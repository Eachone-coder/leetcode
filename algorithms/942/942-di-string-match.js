/**
 * @param {string} S
 * @return {number[]}
 */
var diStringMatch = function(S) {
    let len = S.length
    let start = 0
    let re = []
    for(let i of S){
        if(i === 'I'){
            re.push(start++)
        }else{
            re.push(len--)
        }
    }
    re.push(len)
    return re
};

console.log(diStringMatch('IDID'));