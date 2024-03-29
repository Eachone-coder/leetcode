<?php

/*
给定一个字符串 S 和一个字符 C。返回一个代表字符串 S 中每个字符到字符串 S 中的字符 C 的最短距离的数组。

示例 1:
输入: S = "loveleetcode", C = 'e'
输出: [3, 2, 1, 0, 1, 0, 0, 1, 2, 2, 1, 0]

说明:
字符串 S 的长度范围为 [1, 10000]。
C 是一个单字符，且保证是字符串 S 里的字符。
S 和 C 中的所有字母均为小写字母。
*/

class Solution
{

    /**
     * @param String $S
     * @param String $C
     *
     * @return Integer[]
     */
    public function shortestToChar($S, $C)
    {
        $leftKeys = [];
        $rightKeys = [];
        $left = [];
        $right = [];
        for ($i = 0, $len = strlen($S); $i < $len; $i++) {
            if ($S[$i] == $C) {
                $leftKeys[] = $len - $i - 1;
                $rightKeys[] = $i;
            }
        }

        for ($i = 0, $len = strlen($S); $i < $len; $i++) {
            if ($S[$i] == $C) {
                $left[$i] = 0;
                $right[$i] = 0;
            }else{
                $left[$i] = $i;
                $right[$i] = $i;
            }
        }

        return $left;
    }
}

print_r((new Solution())->shortestToChar('loveleetcode', 'e'));