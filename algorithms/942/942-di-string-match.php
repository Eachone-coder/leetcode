<?php
/*

给定只含 "I"（增大）或 "D"（减小）的字符串 S ，令 N = S.length。
返回 [0, 1, ..., N] 的任意排列 A 使得对于所有 i = 0, ..., N-1，都有：
如果 S[i] == "I"，那么 A[i] < A[i+1]
如果 S[i] == "D"，那么 A[i] > A[i+1]
 

示例 1：
输出："IDID"
输出：[0,4,1,3,2]

示例 2：
输出："III"
输出：[0,1,2,3]

示例 3：
输出："DDI"
输出：[3,2,0,1]
 

提示：
1 <= S.length <= 1000
S 只包含字符 "I" 或 "D"。

*/
class Solution {
    /**
     * @param string $S
     * @return integer[]
     * 我们首先考虑字符串中的第一个字母。如果 S[0] == 'I'，那么我们只要令 A[0] = 0，就一定能满足 A[0] < A[1]。如果 S[0] == 'D'，同样我们只要令 A[0] = N，就一定能满足 A[0] > A[1]。
     * 接下来，当我们考虑 S 中剩下的 N - 1 个字母时，还剩下 N 个数可以使用，这 N 个数为 [0 .. N - 1] 或 [1 .. N]。可以发现，由于 S[0] 的值已经确定，那么剩下 S 中的 N - 1 个字母和 N 个可用的数变成了一个和原问题相同，但规模为 N - 1 的问题。即如果 S[1] == 'I'，我们就令 A[1] 为剩下数中最小的那个数；如果 S[1] == 'D'，我们就令 A[1] 为剩下数中最大的那个数。
     * 我们每次会把可以使用的数的集合中的最小值或最大值取出，并放到当前的位置，因此可以使用的数的集合总是连续的，就可以非常方便的进行维护。
     * 算法
     * 我们维护当前未使用的最小和最大的数，它们对应的区间为当前未使用的数的集合。从左向右扫描字符串，如果碰到 'I'，就取出当前最小的数，否则取出当前最大的数。
     */
    function diStringMatch($S) {
        $len = strlen($S);
        $arr = range(0, $len);
        $minValue = 0;
        $maxValue = max($arr);
        $newArr = [];
        
        for ($i=0; $i < $len+1; $i++) { 
            if ($S[$i] == 'I') {
                $newArr[$i] = $minValue;
                $minValue++;
            }else {
                $newArr[$i] = $maxValue;
                $maxValue--;
            }
        }
        
        return $newArr;
    }
}

$solution = new Solution();
var_dump($solution->diStringMatch('IDID'));