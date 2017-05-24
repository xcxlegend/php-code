<?php 

/**
 * 求1-max素数
 * @param [type] $max [description]
 */
function Prime($max)
{
    if ($max == 2) return [2];
    $primes = [];

    for ($i=2; $i <= $max; $i++) { 
        
        $check = ceil(sqrt($i));
        $yes = true;
        for ($j = 2; $j <= $check; $j++) { 
            if ($i%$j == 0) $yes = false;
        }

        $yes && $primes[] = $i;

    }

    return $primes;

}


$primes = Prime(100);
// print_r($primes);