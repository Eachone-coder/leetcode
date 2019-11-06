<?php
/*
给定两个由小写字母构成的字符串 A 和 B ，只要我们可以通过交换 A 中的两个字母得到与 B 相等的结果，就返回 true ；否则返回 false 。

示例 1：
输入： A = "ab", B = "ba"
输出： true

示例 2：
输入： A = "ab", B = "ab"
输出： false

示例 3:
输入： A = "aa", B = "aa"
输出： true

示例 4：
输入： A = "aaaaaaabc", B = "aaaaaaacb"
输出： true

示例 5：
输入： A = "", B = "aa"
输出： false 

提示：
0 <= A.length <= 20000
0 <= B.length <= 20000
A 和 B 仅由小写字母构成。
*/

class Solution
{

    /**
     * @param String $A
     * @param String $B
     *
     * @return Boolean
     */
    public function buddyStrings($A, $B)
    {
        if (strlen($A) !== strlen($B)) {
            return false;
        }

        $arrA = str_split($A, 1);
        $arrB = str_split($B, 1);
        return array_diff_assoc($arrA, $arrB);
        $counts = count(array_diff_assoc($arrA, $arrB));
        if (0 < $counts && $counts <= 2) {
            return true;
        } else if ($counts === 0) {
            if (array_unique($arrA) == $arrA) {
                return false;
            } else {
                return true;
            }
        }

        return false;
    }
}

//var_dump((new Solution())->buddyStrings('aa', 'aa'));
//var_dump((new Solution())->buddyStrings('ab', 'ab'));
//var_dump((new Solution())->buddyStrings('aaaaaaabc', 'aaaaaaacb'));
var_dump((new Solution())->buddyStrings('abcaa', 'abcbb'));