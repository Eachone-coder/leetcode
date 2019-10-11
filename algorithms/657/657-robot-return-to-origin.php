<?php
class Solution {

    /**
     * @param string $moves
     * @return boolean
     */
    public function judgeCircle($moves) {
        $ud = $lr = 0;
        for ($i=0; $i < strlen($moves); $i++) { 
            switch($moves[$i]){
                case 'U':
                    $ud++;
                    break;
                case 'D':
                    $ud--;
                    break;
                case 'L':
                    $lr++;
                    break;
                case 'R':
                    $lr--;
                    break;
                default:
                    break;
            }
        }
        return ($ud == 0 && $lr == 0) ? true : false;
    }
}

$solution  = new Solution();
var_dump($solution->judgeCircle('UD'));
var_dump($solution->judgeCircle('LDRRLRUULR'));