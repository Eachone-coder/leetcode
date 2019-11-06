<?php

/*
给你两个数组，arr1 和 arr2，
arr2 中的元素各不相同
arr2 中的每个元素都出现在 arr1 中
对 arr1 中的元素进行排序，使 arr1 中项的相对顺序和 arr2 中的相对顺序相同。未在 arr2 中出现过的元素需要按照升序放在 arr1 的末尾。

 
示例：
输入：arr1 = [2,3,1,3,2,4,6,7,9,2,19], arr2 = [2,1,4,3,9,6]
输出：[2,2,2,1,4,3,3,9,6,7,19]
 

提示：
arr1.length, arr2.length <= 1000
0 <= arr1[i], arr2[i] <= 1000
arr2 中的元素 arr2[i] 各不相同
arr2 中的每个元素 arr2[i] 都出现在 arr1 中
*/

class Solution
{

    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     *
     * @return Integer[]
     */
    public function relativeSortArray($arr1, $arr2)
    {
        $arr3 = [];
        $arr4 = [];
        for ($i = 0, $len1 = count($arr1); $i < $len1; $i++) {
            if (!in_array($arr1[$i], $arr2)) {
                array_push($arr4, $arr1[$i]);
            }
        }

        for ($j = 0, $len2 = count($arr2); $j < $len2; $j++) {
            for ($i = 0, $len1 = count($arr1); $i < $len1; $i++) {
                if ($arr1[$i] == $arr2[$j]) {
                    array_push($arr3, $arr1[$i]);
                }
            }
        }
        sort($arr4);
        return array_merge($arr3, $arr4);
    }
}

print_r((new Solution())->relativeSortArray([2, 3, 1, 3, 2, 4, 6, 7, 9, 2, 19], [2, 1, 4, 3, 9, 6]));