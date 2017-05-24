<?php

/**
 * 希尔排序
 * @param array &$array [description]
 */
function ShellSort(array &$array = [])
{

    $len = count($array);
    $gap = intval($len/2);
    while ($gap > 0) {
        for ($i = $gap; $i < $len; $i++) { 
            
            for ($j=intval($i/$gap); $j >= 0; $j--) { 
                    
                if ($array[$j] > $array[$j-$gap]){
                    break;
                }
                swap($array[$j], $array[$j-$gap]);
            }
        }

        $gap = intval($gap/2);
    }

}

function swap(&$a, &$b){
    list($a, $b) = [$b, $a];
}

$array = [1,3,4,75,65,32, 12, 35,77,23];
ShellSort($array);
print_r($array);
/**
 *


    $gap = $len/2;
    for ($i=$gap; $i < $len-1; $i++) { 
        
        


    }




 */