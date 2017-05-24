<?php 

/**
 * 快速排序
 * ! 挖坑和分治
 * @param array $array [description]
 */

function QuickSort(array &$array = [])
{
    quick_sort($array, 0, count($array) - 1);
}

// 进行递归的方法
function quick_sort(&$array, $start, $end)
{
    if ($start >= $end){return;}
    $i = quick_find($array, $start, $end);
    quick_sort($array, $start, $i-1);
    quick_sort($array, $i+1, $end);
}

// 快速定位
function quick_find(&$array, $start, $end)
{
    $i = $start;
    $j = $end;

    $temp = $array[$start];
    while ($i < $j) {

        for (; $i < $j ; $j--) { 
            if ($array[$j] < $temp){
                $array[$i] = $array[$j];
                $i++;
                break;
            }
        }

        for (; $i < $j; $i++) { 
            if ($array[$i] >= $temp){
                $array[$j] = $array[$i];
                $j--;
                break;
            }
        }

    }

    $array[$i] = $temp;
    return $i;

}

$array = [75,3,4,1,65,32, 12, 35,77,23];
QuickSort($array);
print_r($array);