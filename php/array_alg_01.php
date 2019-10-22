<?php

$arrays = [
    [
        ['gs_id' => 1, 'id' => 11, 'sub_type_id' => 1,],
        ['gs_id' => 2, 'id' => 12, 'sub_type_id' => 2,],
        ['gs_id' => 3, 'id' => 13, 'sub_type_id' => 3,],
        ['gs_id' => 4, 'id' => 14, 'sub_type_id' => 4,],
    ],
    [
        ['gs_id' => 2, 'id' => 12, 'sub_type_id' => 1,],
        ['gs_id' => 2, 'id' => 12, 'sub_type_id' => 2,],
        ['gs_id' => 3, 'id' => 13, 'sub_type_id' => 3,],
        ['gs_id' => 4, 'id' => 13, 'sub_type_id' => 4,],
    ],
    [
        ['gs_id' => 2, 'id' => 12, 'sub_type_id' => 2,],
        ['gs_id' => 3, 'id' => 13, 'sub_type_id' => 3,],
        ['gs_id' => 5, 'id' => 15, 'sub_type_id' => 5,],
    ],
];

/*$arrays = [
    [
        [
            "gs_id" => 24220,
            "id" => 1201010610300101,
            "sub_type_id" => 6083788,
        ],
        [
            "gs_id" => 24220,
            "id" => 1201010610300101,
            "sub_type_id" => 6083789,
        ],
        [
            "gs_id" => 73848,
            "id" => 1201011608030101,
            "sub_type_id" => 2957071,
        ],
        [
            "gs_id" => 75485,
            "id" => 1201011707040101,
            "sub_type_id" => 3621233,
        ],
        [
            "gs_id" => 75572,
            "id" => 1201021503130101,
            "sub_type_id" => 3066782,
        ],
        [
            "gs_id" => 6975,
            "id" => 1201021810290002,
            "sub_type_id" => 6140321,
        ],
        [
            "gs_id" => 17472,
            "id" => 1201031408190101,
            "sub_type_id" => 4224616,
        ],
    ],
    [
        [
            "gs_id" => 17472,
            "id" => 1201031408190101,
            "sub_type_id" => 4224616,
        ],
        [
            "gs_id" => 17472,
            "id" => 1201031408190101,
            "sub_type_id" => 4125121,
        ],
        [
            "gs_id" => 63028,
            "id" => 1201031704210101,
            "sub_type_id" => 6083796,
        ],
        [
            "gs_id" => 14421,
            "id" => 1201031710310102,
            "sub_type_id" => 5991762,
        ],
        [
            "gs_id" => 17472,
            "id" => 1201031801220101,
            "sub_type_id" => 6118992,
        ],
        [
            "gs_id" => 34541,
            "id" => 1201041501290101,
            "sub_type_id" => 4125839,
        ],
    ],
];*/

$tempArray = [];

foreach ($arrays as $key => $array) {
    foreach ($array as $a) {
        $tempArray[$key][implode('_', $a)] = $a['gs_id'] . '_' . $a['id'];
    }
}

$uniqueArrays = array_values(array_intersect(...$tempArray));

$return = [];
foreach ($tempArray as $item) {
    foreach ($item as $key => $it) {
        foreach ($uniqueArrays as $uniqueArray) {
            if ($it == $uniqueArray) {
                $return[] = $key;
            }
        }
    }
}

$temps = array_unique($return);
//$tempsArray = [];
//foreach ($temps as $temp) {
//    $tempsArray[] = explode('_', $temp);
//}

print_r($temps);