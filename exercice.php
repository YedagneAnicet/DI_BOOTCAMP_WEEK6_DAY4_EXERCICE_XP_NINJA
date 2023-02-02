<?php
function array_union($array1, $array2)
{
    $union_array =  array_merge(
        array_intersect($array1, $array2),
        array_diff($array1, $array2),
        array_diff($array2, $array1)
    );
    return $union_array;
}
$fist_array = array(1, 2, 3, 4, 5);
$second_array = array(2, 3, 4, 5, 6, 7, 8);
print_r(array_union($fist_array, $second_array));

?>