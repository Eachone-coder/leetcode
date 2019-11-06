<?php
$array = [
    'name' => 'A',
    'value' => 40,
    'level' => 1,
    'children' => [
        [
            'name' => 'B',
            'value' => 30,
            'level' => 2,
            'children' => [
                [
                    'name' => 'C',
                    'value' => 20,
                    'level' => 3,
                    'children' => [
                        [
                            'name' => 'E',
                            'value' => 10,
                            'level' => 4,
                        ],
                        [
                            'name' => 'F',
                            'value' => 10,
                            'level' => 4,
                        ],
                    ],
                ],
                [
                    'name' => 'D',
                    'value' => 20,
                    'level' => 3,
                ],
            ],
        ],
    ],
];

function fenxiao($children = [], $parent = [])
{
    if (!isset($children['children'])) {
       
    } else {
        fenxiao($children['children'], $children);
    }
}

fenxiao($array);