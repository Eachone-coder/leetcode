<?php
class Solution {

    /**
     * @param integer[] $heights
     * @return integer
     */
    public function heightChecker($heights) {
        return count(array_diff_assoc($heights,$sort($heights)));
    }
}

$solution = new Solution();
var_dump($solution->heightChecker([1,1,4,2,1,3]));