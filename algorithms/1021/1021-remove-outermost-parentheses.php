<?php
/*
有效括号字符串为空 ("")、"(" + A + ")" 或 A + B，其中 A 和 B 都是有效的括号字符串，+ 代表字符串的连接。例如，""，"()"，"(())()" 和 "(()(()))" 都是有效的括号字符串。
如果有效字符串 S 非空，且不存在将其拆分为 S = A+B 的方法，我们称其为原语（primitive），其中 A 和 B 都是非空有效括号字符串。
给出一个非空有效字符串 S，考虑将其进行原语化分解，使得：S = P_1 + P_2 + ... + P_k，其中 P_i 是有效括号字符串原语。
对 S 进行原语化分解，删除分解中每个原语字符串的最外层括号，返回 S 。

 

示例 1：
输入："(()())(())"
输出："()()()"
解释：
输入字符串为 "(()())(())"，原语化分解得到 "(()())" + "(())"，
删除每个部分中的最外层括号后得到 "()()" + "()" = "()()()"。

示例 2：
输入："(()())(())(()(()))"
输出："()()()()(())"
解释：
输入字符串为 "(()())(())(()(()))"，原语化分解得到 "(()())" + "(())" + "(()(()))"，
删除每隔部分中的最外层括号后得到 "()()" + "()" + "()(())" = "()()()()(())"。

示例 3：
输入："()()"
输出：""
解释：
输入字符串为 "()()"，原语化分解得到 "()" + "()"，
删除每个部分中的最外层括号后得到 "" + "" = ""。
 

提示：
S.length <= 10000
S[i] 为 "(" 或 ")"
S 是一个有效括号字符串
*/

class Solution {

    // 此方法没有看见  *S 是一个有效括号字符串* 这个条件
    public function removeOuterParentheses($S) {
        $left = [];
        $right = [
            -1=>0,
        ];
        for ($i=0; $i < strlen($S); $i++) { 
            if ($S[$i] === '(') {
                if ((1 + $right[$i-1]+1) > 2) {
                    $left[$i] = 1;
                }else{
                    $left[$i] = 0;
                }
                $right[$i] = $right[$i-1]+1;
            }else{
                if ((2 + $right[$i-1]-1) > 2) {
                    $left[$i] = 1;
                }else{
                    $left[$i] = 0;
                }
                $right[$i] = $right[$i-1]-1;
            }
        }

        $newS = [];
        foreach($left as $key=>$value){
            if ($value == 1) {
                $newS[] = $S[$key];
            }
        }

        return implode('',$newS);
    }

    public function removeOuterParenthesesBest($S){
        $number = 0;
        $newS = '';
        for ($i=0; $i < strlen($S); $i++) { 
            if ($S[$i] === '(') {
                if ($number > 0) {
                    $newS .= $S[$i];
                }
                $number++;
            }else{
                $number--;
                if ($number > 0) {
                    $newS .= $S[$i];
                }
            }
        }
        return $newS;
    }
}

$solution = new Solution();
var_dump($solution->removeOuterParentheses('(()())(())(()(()))'));
var_dump($solution->removeOuterParenthesesBest('(()())(())(()(()))'));