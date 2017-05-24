<?php 

/**
 * 归并排序
 * ! 重点是temp数组
 * @param array $array [description]
 */

function MergeSort(array &$array = [])
{
    $len = count($array);
    $temp = $array;
    mSort($array, 0, $len-1, $temp);

}

function mSort(array &$array, $start, $end, &$temp)
{
    if ($start == $end) {
        $temp[$start] = $array[$start];
        return;
    };
    $divide = floor(($start + $end)/2);
    mSort($array, $start, $divide, $temp);
    mSort($array, $divide + 1, $end, $temp);
    merge($array, $temp, $start, $divide, $end);
}

function merge(&$array, &$temp, $start, $divide, $end)
{
    $i = $start;
    $j = $divide+1;
    $k = $start;

    while ($i <= $divide && $j <= $end) {
        if ($array[$i] <= $array[$j]){
            $temp[$k] = $array[$i];
            $i++;
        }else{
            $temp[$k] = $array[$j];
            $j++;
        }
        $k++;
    }   

    if ($i > $divide){
        for ($l = $j; $l <= $end; $l++) { 
            $temp[$k] = $array[$l];
            $k++;
        }
    }
    if ($j > $end){
        for ($l = $i; $l <= $divide; $l++) { 
            $temp[$k] = $array[$l];
            $k++;
        }
    }
    $array = $temp;
}


$array = [1,3,4,75,65,32, 12, 35,77,23];
MergeSort($array);
print_r($array);