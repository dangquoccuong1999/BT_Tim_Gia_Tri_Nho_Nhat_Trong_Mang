<?php
$arr = array(10, 6, 6, 8, 2, 50, 34);
function timMin($arr)
{
    $min = $arr[0];
    foreach ($arr as $value) {
        if ($min > $value) {
            $min = $value;
        }
    }
    return $min;
}

echo timMin($arr);
?>