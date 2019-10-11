<?php
class Solution {

    /**
     * @param String $str
     * @return String
     */
    function toLowerCase($str) {
        $newStr = '';
        $count = strlen($str);
        for ($i=0; $i < $count; $i++) { 
            $ascii = ord($str[$i]);
            if ($ascii >= 65 && $ascii <= 90) {
                $newStr .= chr($ascii + 32);
            }else{
                $newStr .= $str[$i];
            }
        }
        return $newStr;
    }
}

$solution = new Solution();
var_dump($solution->toLowerCase("al&phaBET"));