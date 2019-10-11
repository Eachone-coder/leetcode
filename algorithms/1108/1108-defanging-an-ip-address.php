<?php
/*
给你一个有效的 IPv4 地址 address，返回这个 IP 地址的无效化版本。
所谓无效化 IP 地址，其实就是用 "[.]" 代替了每个 "."。

示例 1：
输入：address = "1.1.1.1"
输出："1[.]1[.]1[.]1"

示例 2：
输入：address = "255.100.50.0"
输出："255[.]100[.]50[.]0"
 
提示：
给出的 address 是一个有效的 IPv4 地址
 */

class Solution
{

    /**
     * @param String $address
     *
     * @return String
     */
    public function defangIPaddr($address)
    {
        return str_replace('.', '[.]', $address);
    }

    public function defangIPaddrCycle($address)
    {
        $newAddress = str_split($address);
        foreach ($newAddress as &$value) {
            if ($value === '.') {
                $value = '[.]';
            }
        }
        unset($value);
        return implode("", $newAddress);
    }
}

$solution = new Solution();
var_dump($solution->defangIPaddr('0.0.0.0'));
var_dump($solution->defangIPaddr('255.100.50.0'));
var_dump($solution->defangIPaddrOne('0.0.0.0'));
var_dump($solution->defangIPaddrOne('255.100.50.0'));