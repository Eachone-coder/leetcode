<?php

/*
自除数 是指可以被它包含的每一位数除尽的数。
例如，128 是一个自除数，因为 128 % 1 == 0，128 % 2 == 0，128 % 8 == 0。
还有，自除数不允许包含 0 。
给定上边界和下边界数字，输出一个列表，列表的元素是边界（含边界）内所有的自除数。

示例 1：
输入：
上边界left = 1, 下边界right = 22

输出：
[1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 15, 22]

注意：
每个输入参数的边界满足 1 <= left <= right <= 10000。
 */

class Solution
{

    /**
     * @param Integer $left
     * @param Integer $right
     *
     * @return Integer[]
     */
    function selfDividingNumbers($left, $right)
    {
        /*$newArr = [];
        for ($i = $left; $i <= $right; $i++) {
            $tempArr = str_split($i, 1);
            $tempLen = strlen($i);
            $j = 0;
            while ($tempLen > 0) {
                if (($tempArr[$j] != 0) && (($i % $tempArr[$j]) != 0)) {
                    break;
                }
                if ($tempArr[$j] == 0) {
                    break;
                }
                $j++;
                $tempLen--;
            }
            if ($tempLen === 0 && $j === (strlen($i))) {
                $newArr[] = $i;
            }
        }
        return $newArr;*/
        $newArr = [];
        for ($i = $left; $i <= $right; $i++) {
            $tempI = $i;
            $isValid = true;
            while ($tempI >= 1) {
                if (($i % 10) === 0 || ($tempI % 10) === 0 || ($i % ($tempI % 10)) !== 0) {
                    $isValid = false;
                    break;
                } else {
                    $tempI = floor($tempI / 10);
                }
            }

            if ($isValid) {
                $newArr[] = $i;
            }
        }
        return $newArr;
    }
}

$solution = new Solution();
var_dump($solution->selfDividingNumbers(101, 103));