<?php

/*
给定一个长度为 n 的整数数组，你的任务是判断在最多改变 1 个元素的情况下，该数组能否变成一个非递减数列。
我们是这样定义一个非递减数列的： 对于数组中所有的 i (1 <= i < n)，满足 array[i] <= array[i + 1]。

示例 1:
输入: [4,2,3]
输出: True
解释: 你可以通过把第一个4变成1来使得它成为一个非递减数列。

示例 2:
输入: [4,2,1]
输出: False
解释: 你不能在只改变一个元素的情况下将其变为非递减数列。

说明:  n 的范围为 [1, 10,000]。
 */

class Solution
{

    /**
     * @param Integer[] $nums
     *
     * @return Boolean
     */
    public function checkPossibility($nums)
    {
        $cnt = 0;
        $length = count($nums);
        for ($i = 0; $i < $length - 1; $i++) {
            if ($nums[$i] > $nums[$i + 1]) {
                $tmp = $nums[$i];
                if ($i >= 1) {
                    $nums[$i] = $nums[$i - 1];
                } else {
                    $nums[$i] = $nums[$i + 1];
                }
                if ($nums[$i] > $nums[$i + 1]) {
                    $nums[$i] = $tmp;
                    $nums[$i + 1] = $nums[$i];
                }
                $cnt++;
                if ($cnt == 2) {
                    return false;
                }
            }
        }
        return true;
    }
}
//
//var_dump((new Solution())->checkPossibility([4, 2, 1]));
//var_dump((new Solution())->checkPossibility([1, 3, 2]));
//var_dump((new Solution())->checkPossibility([4, 1, 2]));
var_dump((new Solution())->checkPossibility([3, 4, 2, 3]));