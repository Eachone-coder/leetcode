<?php
/*
给定一个正整数 n，生成一个包含 1 到 n^2 所有元素，且元素按顺时针顺序螺旋排列的正方形矩阵。

示例:

输入: 3
输出:
[
 [ 1, 2, 3 ],
 [ 8, 9, 4 ],
 [ 7, 6, 5 ]
]

*/
class Solution {

    /**
     * @param Integer $n
     * @return Integer[][]
     */
    function generateMatrix($n) {
        $arr = array_fill(0, $n, array_fill(0, $n, 0));
        $fillArr = range(1,pow($n,2));
        
        $isLoop = true;
        $a= 0;
        while ($isLoop) {
            // right
            // x:0  y:0~n-1
            // x:a  y:a~n-1-a
            for ($i=$a; $i <= $n - 1 - $a; $i++) { 
                $arr[$a][$i] = array_shift($fillArr);
            }
            if (count($fillArr) === 0) {
                $isLoop = false;
                break;
            }

            // down
            // x:1~n-1  y:n-1
            // x:a+1~n-1-a  y:n-1-a
            for ($i=$a + 1; $i <= $n - 1 - $a; $i++) { 
                $arr[$i][$n-1-$a] = array_shift($fillArr);
            }
            if (count($fillArr) === 0) {
                $isLoop = false;
                break;
            }

            // left
            // x:n-1  y:n-2~0
            // x:n-1-a  y:n-2-a~a
            for ($i=$n-2 - $a; $i >= $a; $i--) { 
                $arr[$n-1-$a][$i] = array_shift($fillArr);
            }
            if (count($fillArr) === 0) {
                $isLoop = false;
                break;
            }
            
            
            // up
            // x:n-2~1  y:0
            // x:n-2-a~a+1  y:a
            for ($i=$n-2-$a; $i >= $a+1; $i--) { 
                $arr[$i][$a] = array_shift($fillArr);
            }
            if (count($fillArr) === 0) {
                $isLoop = false;
                break;
            }
            
            $a++;
        }

        return $arr;
    }
}

$solution = new Solution();
var_dump($solution->generateMatrix(3));