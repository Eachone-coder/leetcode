<?php
/**
 * array_map()的部分用法
 * 定义：array_map — 为数组的每个元素应用回调函数
 *
 * 说明 ¶
 * array_map ( callable $callback , array $array1 [, array $... ] ) : array
 * array_map()：返回数组，是为 array1 每个元素应用 callback函数之后的数组。 callback 函数形参的数量和传给 array_map() 数组数量，两者必须一样。
 */

//

//$tempArrs = ['name' => 'Eachone', 'age' => 18, 'info' => ['vip' => 0, 'status' => 1]];
//array_map(function ($key, $item) {
//    echo 'key:';
//    var_dump($key);
//    echo "\n";
//    echo 'item:';
//    var_dump($item);
//    echo "\n";
//    echo "-----------------------";
//    echo "\n";
//}, array_keys($tempArrs), array_values($tempArrs));

/**
 * 传入两个及以上的数组时，它们元素数量将会相同。因为回调函数会并行地处理相互对应的元素。
 * 如果几个数组的元素数量不一致：空元素会扩展那个数组，直到长度和最长的数组一样。
 * 此函数有个有趣的用法：传入 NULL 作为回调函数的名称，将创建多维数组（一个数组，内部包含数组。）
 */
$a = [1, 2, 3, 4, 5];
$b = ["one", "two", "three", "four", "five"];
$c = ["uno", "dos", "tres", "cuatro", "cinco"];

$d = array_map(null, $a, $b, $c);
print_r($d);