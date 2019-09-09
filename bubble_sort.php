<?php
/**
 * User: weiniwang
 * Date: 2019/9/9
 * Time: 22:25
 */

function bubbleSort(array $arr): array
{
    $len = count($arr);

    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $tmp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }

    return $arr;
}



function bubbleSort2(array $arr): array
{
    $len = count($arr);

    for ($i = $len; $i > 0; $i--) {
        for ($j = 0; $j > $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $tmp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    return $arr;
}


$arr = [8, 3, 6, 9, 10, 2, 5];
//showBubbleSort($arr);

showBubbleSort2($arr);