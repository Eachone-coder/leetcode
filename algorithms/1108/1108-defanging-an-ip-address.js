/**
 * @param {string} address
 * @return {string}
 */
var defangIPaddr = function (address) {
    return address.replace(/\./g, "[.]");
};

var defangIPaddrOne = function (address) {
    return (address.split('.')).join('[.]')
};


console.log(defangIPaddr('1.1.1.1'));
console.log(defangIPaddr('255.100.50.0'));
console.log(defangIPaddrOne('1.1.1.1'));
console.log(defangIPaddrOne('255.100.50.0'));