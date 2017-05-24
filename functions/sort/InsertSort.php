<?php 

/**
 * 插入排序
 * @param array &$array [description]
 */
function InsertSort(array &$array = []){

    $len = count($array);
    if ($len <= 1){ return;}
    $temp = [];
    for ($i = 0; $i < $len; $i++) { 
        insert($temp, $array[$i]);
    }
    $array = $temp;
}


function insert(array &$array, $item){

    $len = count($array);
    $key = $len;
    for ($i = $len - 1; $i >= 0 ; $i--) { 
        if ( $item < $array[$i] ){
            $key = $i;
            break;
        }
    }
    for ($i=$len; $i > $key; $i--) { 
        $array[$i] = $array[$i-1];
    }
    $array[$key] = $item;
}

function swap(&$a, &$b){
    list($a, $b) = [$b, $a];
}

$array = [1,3,4,75,65,32, 12, 35,77,23];
InsertSort($array);
print_r($array);