<?php

/*
给定一个非负整数 numRows，生成杨辉三角的前 numRows 行。
在杨辉三角中，每个数是它左上方和右上方的数的和。

示例:

输入: 5
输出:
[
     [1],
    [1,1],
   [1,2,1],
  [1,3,3,1],
 [1,4,6,4,1]
]

*/

class Solution
{

    /**
     * @param Integer $numRows
     *
     * @return Integer[][]
     */
    public function generate($numRows)
    {
        $arrays = [];

        for ($i = 0; $i < $numRows; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                if ($j === 0 || $j === $i) {
                    $arrays[$i][$j] = 1;
                } else {
                    $arrays[$i][$j] = $arrays[$i - 1][$j - 1] + $arrays[$i - 1][$j];
                }
            }
        }

        return $arrays;
    }
}

print_r((new Solution())->generate(5));