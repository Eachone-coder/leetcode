<?php
function test_array_change_key_case()
{
    $array = [
        'Author' => '丁军',
        'author' => 'Eachone',
        'title' => 'test_array_change_key_case',
    ];

    print_r(array_change_key_case($array, CASE_LOWER));
    print_r(array_change_key_case($array, CASE_UPPER));
}

test_array_change_key_case();