<?php 

/**
 * 选择排序
 * @param array $array [description]
 */
function ChooseSort(array &$array = [])
{
    
    $len = count($array);

    for ($i=1; $i <= $len - 1; $i++) { 
        
        for ($j=$i+1; $j <= $len; $j++) { 
            
            if ($array[$i-1] > $array[$j-1]){
                swap($array[$i-1], $array[$j-1]);
            }

        }




    }


}

function swap(&$a, &$b){
    list($a, $b) = [$b, $a];
}

$array = [1,3,4,75,65,32, 12, 35,77,23];
ChooseSort($array);
print_r($array);
