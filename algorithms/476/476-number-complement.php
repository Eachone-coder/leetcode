<?php

/*
给定一个正整数，输出它的补数。补数是对该数的二进制表示取反。

注意:
给定的整数保证在32位带符号整数的范围内。
你可以假定二进制数不包含前导零位。

示例 1:
输入: 5
输出: 2
解释: 5的二进制表示为101（没有前导零位），其补数为010。所以你需要输出2。

示例 2:
输入: 1
输出: 0
解释: 1的二进制表示为1（没有前导零位），其补数为0。所以你需要输出0。
 */

class Solution
{

    /**
     * @param Integer $num
     *
     * @return Integer
     */
    public function findComplement($num)
    {
        $temp = $num;
        $num2 = 1;
        while ($temp != 0) {
            $temp = $temp >> 1;
            $num2 = $num2 << 1;
        }
        $num2 -= 1;
        return $num2 ^ $num;
    }
}

/*
 * 规律：
 * 5 => 101
 * 对应补数：2 => 010
 * 等于  111（7） ^(异或) 101（5）= 010(2)
 *
 * 9 => 1001
 * 对应补数：6 => 110
 * 等于  1111（15 => [10000(16-1)]） ^(异或) 1001（9）= 110(6)
 */
$solution = new Solution();
var_dump($solution->findComplement(4));