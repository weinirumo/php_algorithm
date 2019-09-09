<?php
/**
 * User: weiniwang
 * Date: 2019/9/9
 * Time: 23:27
 */
// 使用此文件，你可以清楚的看到冒泡排序的流程
// use this file, you can see the running process of bubble sort

$arr = [13,25,78,12,54,37,92,10];

function showBubbleSort(array $arr)
{
    $len = count($arr);


    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len - 1; $j++) {
            $styleClass = 'tochange';
            // print current line when compare operation is going to be executed
            showLine($arr, $j, $styleClass);
            if ($arr[$j] > $arr[$j + 1]) {
                $tmp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
                $styleClass = 'changed';
                // print current line when exchanges happened
                showLine($arr, $j, $styleClass);
            }

        }

    }
}

/**
 * another way to implements bubble sort
 * @param array $arr
 */
function showBubbleSort2(array $arr)
{
    $len = count($arr);

    for ($i = $len; $i > 0; $i--) {
        for ($j = 0; $j < $i - 1; $j++) {
            $color = 'tochange';
            showLine($arr, $j, $color);
            if ($arr[$j] > $arr[$j + 1]) {
                $tmp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
                $color = 'changed';
                showLine($arr, $j, $color);
            }

        }
    }
}

function showLine($arr, $column, $styleClass)
{
    $len = count($arr);

    echo '<tr>';
    for ($k = 0; $k < $len; $k++) {
        if ($k == $column || $k == ($column + 1)) {
            echo '<td class="',$styleClass,'">', $arr[$k], '</td>';
        } else {
            echo '<td>', $arr[$k], '</td>';
        }

    }
    echo '</tr>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border:1px solid #ccc;
        }
        table {
            border-collapse:collapse;
            text-align: center;
        }
        .tochange {
            background: aquamarine;
        }
        .changed {
            background: orangered;
        }
        td {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>

<table>
    <?php showBubbleSort($arr); ?>
</table>

<hr>

<table>
    <?php showBubbleSort2($arr); ?>
</table>
</body>
</html>
