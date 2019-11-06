<?php

/*
给定仅有小写字母组成的字符串数组 A，返回列表中的每个字符串中都显示的全部字符（包括重复字符）组成的列表。例如，如果一个字符在每个字符串中出现 3 次，但不是 4 次，则需要在最终答案中包含该字符 3 次。
你可以按任意顺序返回答案。
 
示例 1：
输入：["bella","label","roller"]
输出：["e","l","l"]

示例 2：
输入：["cool","lock","cook"]
输出：["c","o"]
 

提示：
1 <= A.length <= 100
1 <= A[i].length <= 100
A[i][j] 是小写字母
*/

class Solution
{

    /**
     * @param String[] $A
     *
     * @return String[]
     */
    public function commonChars($A)
    {
        $newA = array_map(function ($val) {
            return array_count_values(str_split($val, 1));
        }, $A);

        $keys = array_intersect(...array_map(function ($val) {
            return array_keys($val);
        }, $newA));

        if (!$keys) {
            return [];
        }

        $newS = [];
        foreach ($keys as $key) {
            for ($i = 0; $i < min(array_column($newA, $key)); $i++) {
                $newS[] = $key;
            }
        }

        return $newS;
    }
}

var_dump((new Solution())->commonChars(["acabcddd", "bcbdbcbd", "baddbadb", "cbdddcac", "aacbcccd", "ccccddda", "cababaab", "addcaccd"]));
var_dump((new Solution())->commonChars(["bella", "label", "roller"]));
var_dump((new Solution())->commonChars(["cool", "lock", "cook"]));
var_dump((new Solution())->commonChars(["bbddabab", "cbcddbdd", "bbcadcab", "dabcacad", "cddcacbc", "ccbdbcba", "cbddaccc", "accdcdbb"]));