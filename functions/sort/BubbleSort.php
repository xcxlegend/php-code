<?php

/**
 * 冒泡排序
 * @param array &$array [description]
 */
function BubbleSort(array &$array = []){

    $len = count($array);

    for ($i = 0; $i < $len; $i++) { 

        for ($j = $i+1; $j < $len; $j++) { 

            if ($array[$j-1] > $array[$j]){

                swap($array[$j-1], $array[$j]);

            }    

        }

    }

}


function swap(&$a, &$b){
    list($a, $b) = [$b, $a];
}

$array = [1,3,4,75,65,32, 12, 35,77,23];
BubbleSort($array);
print_r($array);
