<?php

class Solution
{

    /**
     * @param integer $N
     *
     * @return bool
     */
    public function divisorGame($N)
    {
        return $N % 2 == 0;
    }
}

$solution = new Solution();
var_dump($solution->divisorGame(3));