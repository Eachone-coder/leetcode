<?php

/*
给定一组不含重复元素的整数数组 nums，返回该数组所有可能的子集（幂集）。

说明：解集不能包含重复的子集。
示例:
输入: nums = [1,2,3]

输出:
[
  [3],
  [1],
  [2],
  [1,2,3],
  [1,3],
  [2,3],
  [1,2],
  []
]
*/

class Solution
{

    /**
     * @param Integer[] $nums
     *
     * @return Integer[][]
     */
    function subsets($nums)
    {
        $len = count($nums);
        if ($len == 0) {
            return [];
        }
        $newArr = [[],];
        for ($i = 0; $i < $len; $i++) {
            $temp = $nums[$i];
            array_push($newArr, [$temp]);
            $size = count($newArr);
            for ($j = 1; $j < $size; $j++) {
                if ($newArr[$j][0] !== $temp) {
                    $tempArr = $newArr[$j];
                    $tempArr[] = $temp;
                    array_push($newArr, $tempArr);
                }
            }
        }
        return $newArr;
    }
}

$solution = new Solution();
var_dump($solution->subsets([1, 2, 3]));