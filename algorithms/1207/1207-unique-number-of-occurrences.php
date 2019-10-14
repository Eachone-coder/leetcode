<?php

/*
给你一个整数数组 arr，请你帮忙统计数组中每个数的出现次数。
如果每个数的出现次数都是独一无二的，就返回 true；否则返回 false。 

示例 1：
输入：arr = [1,2,2,1,1,3]
输出：true
解释：在该数组中，1 出现了 3 次，2 出现了 2 次，3 只出现了 1 次。没有两个数的出现次数相同。

示例 2：
输入：arr = [1,2]
输出：false

示例 3：
输入：arr = [-3,0,1,-3,1,1,1,-3,10,0]
输出：true 

提示：
1 <= arr.length <= 1000
-1000 <= arr[i] <= 1000
 */

class Solution
{

    /**
     * @param Integer[] $arr
     *
     * @return Boolean
     */
    public function uniqueOccurrences($arr)
    {
        $counts = count($arr);

        $newArr = [];
        for ($i = 0; $i < $counts; $i++) {
            if (isset($newArr[$arr[$i]])) {
                $newArr[$arr[$i]] += 1;
            } else {
                $newArr[$arr[$i]] = 1;
            }
        }

        $isUnique = true;
        $newArr1 = [];

        foreach ($newArr as $value){
            if (isset($newArr1[$value])) {
                $isUnique = false;
                break;
            } else {
                $newArr1[$value] = 1;
            }
        }

        return $isUnique;
    }
}

var_dump((new Solution())->uniqueOccurrences([-3, 0, 1, -3, 1, 1, 1, -3, 10, 0]));