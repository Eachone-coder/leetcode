<?php

/*
给定两个数组，编写一个函数来计算它们的交集。

示例 1:
输入: nums1 = [1,2,2,1], nums2 = [2,2]
输出: [2]

示例 2:
输入: nums1 = [4,9,5], nums2 = [9,4,9,8,4]
输出: [9,4]

说明:
输出结果中的每个元素一定是唯一的。
我们可以不考虑输出结果的顺序。
 */

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     *
     * @return Integer[]
     */
    public function intersection($nums1, $nums2)
    {
        $counts1 = count($nums1);
        $counts2 = count($nums2);

        $hash = [];
        for ($i = 0; $i < $counts1; $i++) {
            $hash[$nums1[$i]] = 0;
        }

        $array_intersection = [];
        for ($j = 0; $j < $counts2; $j++) {
            if (isset($hash[$nums2[$j]]) && $hash[$nums2[$j]] === 0 && !in_array($nums2[$j], $array_intersection)) {
                $array_intersection[] = $nums2[$j];
            }
        }

        return $array_intersection;
    }
}

var_dump((new Solution())->intersection([4, 9, 5], [9, 4, 9, 8, 4]));