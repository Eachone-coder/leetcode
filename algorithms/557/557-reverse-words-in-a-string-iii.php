<?php

/*
给定一个字符串，你需要反转字符串中每个单词的字符顺序，同时仍保留空格和单词的初始顺序。

示例 1:
输入: "Let's take LeetCode contest"
输出: "s'teL ekat edoCteeL tsetnoc" 

注意：在字符串中，每个单词由单个空格分隔，并且字符串中不会有任何额外的空格。
 */

class Solution
{

    /**
     * @param String $s
     *
     * @return String
     */
    public function reverseWords($s)
    {
//        $tempArrs = explode(' ', $s);
//        foreach ($tempArrs as $key => $arr) {
//            $tempArrs[$key] = strrev($arr);
//        }
//        return implode(' ', $tempArrs);

//        return implode(' ', array_map(function ($word) {
//            return strrev($word);
//        }, explode(' ', $s)));

        $len = strlen($s);

        $kong = 0;

        $newS = '';

        for ($i = 0; $i <= $len; $i++) {
            if ($s[$i] == ' ' || $i == $len) {
                for ($j = $i - 1; $j >= $kong; $j--) {
                    $newS .= $s[$j];
                }
                $newS[$i] = ' ';
                $kong = $i;
            }
        }

        return trim($newS);
    }
}

$solution = new Solution();
var_dump($solution->reverseWords("Let's take LeetCode contest"));