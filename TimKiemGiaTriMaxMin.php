<?php
function findMax($arr)
{
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($max < $arr[$i]) {
            $max = $arr[$i];
        }
    }
    return $max;
}

$arr1 = [1, 2, 3, 4, 6, 0];
print_r(findMax($arr1));

function findMin($arr){
    $min = $arr[0];
    for ($i = 1;$i < count($arr);$i++){
        if($min > $arr[$i]){
            $min = $arr[$i];
        }

    }
    return $min;
}
print_r('<br>'.findMin($arr1));