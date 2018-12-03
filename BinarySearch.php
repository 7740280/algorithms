<?php

function binary_search($list, $item)
{
    $low  = 0;
    $high = count($list) - 1;
    while ($low <= $high) {
        $mid   = ceil(($low + $high) / 2);
        $guess = $list[$mid];
        if ($guess == $item) {
            return $mid;
        }

        if ($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
    return null;
}


$arr = [1,3,5,7,9,11,13,15,18];

var_dump(binary_search($arr,7));
