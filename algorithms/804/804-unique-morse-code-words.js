/**
 * @param {string[]} words
 * @return {number}
 */
var uniqueMorseRepresentations = function (words) {
    let morseWords = ['.-', '-...', '-.-.', '-..', '.', '..-.', '--.', '....', '..', '.---', '-.-', '.-..', '--', '-.', '---', '.--.', '--.-', '.-.', '...', '-', '..-', '...-', '.--', '-..-', '-.--', '--..'];

    return new Set(words.map(word => {
        return Array.from(word).reduce((total, w) => {
            return total += morseWords[w.charCodeAt() - 97]
        }, '')
    })).size
};

console.log(uniqueMorseRepresentations(["gin", "zen", "gig", "msg"]));