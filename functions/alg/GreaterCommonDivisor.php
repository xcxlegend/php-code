<?php 


/**
 * 计算最大公约数
 * @param [type] $n1 [description]
 * @param [type] $n2 [description]
 */

function GreaterCommonDivisor($n1, $n2)
{
    if ($n1 == $n2) return $n1;

    $min = min($n1, $n2);
    $max = max($n1, $n2);

    while(true){

        $mod = $max%$min;

        if ($mod == 0){
            break;
        }

        $max = $min;
        $min = $mod;
    }

    return $min;

}

$ds = GreaterCommonDivisor(2*3*3*4, 2*3*4*5);
// echo $ds;