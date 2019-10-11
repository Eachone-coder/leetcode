<?php
/*
给定一个单词列表，只返回可以使用在键盘同一行的字母打印出来的单词。键盘如下图所示。

示例：
输入: ["Hello", "Alaska", "Dad", "Peace"]
输出: ["Alaska", "Dad"] 

注意：
你可以重复使用键盘上同一字符。
你可以假设输入的字符串将只包含字母。
 */

class Solution
{

    /**
     * @param String[] $words
     *
     * @return String[]
     */
    public function findWords($words)
    {
        $map = ['a' => 2, 'b' => 3, 'c' => 3, 'd' => 2, 'e' => 1, 'f' => 2, 'g' => 2, 'h' => 2, 'i' => 1, 'j' => 2, 'k' => 2, 'l' => 2, 'm' => 3, 'n' => 3, 'o' => 1, 'p' => 1, 'q' => 1, 'r' => 1, 's' => 2, 't' => 1, 'u' => 1, 'v' => 3, 'w' => 1, 'x' => 3, 'y' => 1, 'z' => 3];

        $newWords = [];
        foreach ($words as $word) {
            $len = strlen($word);
            $temp_word = strtolower($word);

            // 第一个的map值
            $line = $map[$temp_word[0]];

            $is_append = true;
            for ($i = 0; $i < $len; $i++) {
                $temp = $map[$temp_word[$i]];
                if ($temp !== $line) {
                    $is_append = false;
                    break;
                }
            }

            if ($is_append) {
                $newWords[] = $word;
            }
        }
        return $newWords;
    }
}

$solution = new Solution();
var_dump($solution->findWords(["Hello", "Alaska", "Dad", "Peace"]));
