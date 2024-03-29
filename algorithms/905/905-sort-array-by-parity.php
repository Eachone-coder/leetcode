<?php

/*
给定一个非负整数数组 A，返回一个数组，在该数组中， A 的所有偶数元素之后跟着所有奇数元素。
你可以返回满足此条件的任何数组作为答案。

示例：
输入：[3,1,2,4]
输出：[2,4,3,1]
输出 [4,2,3,1]，[2,4,1,3] 和 [4,2,1,3] 也会被接受。
 
提示：
1 <= A.length <= 5000
0 <= A[i] <= 5000

 */

class Solution
{

    /**
     * @param Integer[] $A
     *
     * @return Integer[]
     */
    public function sortArrayByParity($A)
    {
        $len = count($A);
        $j = 0;
        for ($i = 0; $i < $len; $i++) {
            if (($A[$i] % 2 === 0)) {
                $temp = $A[$j];
                $A[$j] = $A[$i];
                $A[$i] = $temp;
                $j++;
            }
        }
        return $A;
    }
}

$solution = new Solution();
var_dump($solution->sortArrayByParity([3, 2, 1, 4]));