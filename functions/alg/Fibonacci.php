<?php 

/**
 * 斐波那契数列
 * @param [type] $n [description]
 */
function Fibonacci($n)
{
    if ($n <= 2) return 1;
    $array = [1,1];

    for ($i=1; $i < $n; $i++) { 
        $array[$i] = $array[$i-1] + $array[$i-2];
    }
    print_r($array);
    return $array[$n-1];
}


$number = Fibonacci(10);
echo $number;