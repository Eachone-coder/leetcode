<?php
/*
给定一个矩阵 A， 返回 A 的转置矩阵。
矩阵的转置是指将矩阵的主对角线翻转，交换矩阵的行索引与列索引。
 
示例 1：
输入：[[1,2,3],[4,5,6],[7,8,9]]
输出：[[1,4,7],[2,5,8],[3,6,9]]

示例 2：
输入：[[1,2,3],[4,5,6]]
输出：[[1,4],[2,5],[3,6]]
 

提示：
1 <= A.length <= 1000
1 <= A[0].length <= 1000
 */

class Solution
{

    /**
     * @param Integer[][] $A
     *
     * @return Integer[][]
     */
    public function transpose($A)
    {
        $lenX = count($A);
        $lenY = count($A[0]);
        $newA = [];
        for ($i = 0; $i < $lenX; $i++) {
            for ($j = 0; $j < $lenY; $j++) {
                $newA[$j][$i] = $A[$i][$j];
            }
        }
        return $newA;
    }
}

var_dump((new Solution())->transpose([[1, 2, 3], [4, 5, 6]]));