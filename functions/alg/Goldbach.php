<?php 


require_once "./Prime.php";

/**
 * 哥德巴赫猜想验证
 * @param [type] $max [description]
 */

function Goldbach($max)
{
    if ($max < 6) {
        echo 'max < 6';
        exit;
    }
    $odds = array_filter(range(6, $max), function($item){
        return $item%2 == 0;
    });

    $primes = Prime($max);
    foreach ($odds as $odd) {
        $plus = [];
        $check = goldbach_check($primes, $odd, $plus);
        if ($check == true){
            printf("%d验证成功 %d = %d+%d\r\n", $odd, $odd, $plus[0], $plus[1]);
        }
        if ($check == false){
            printf("%d验证失败\r\n", $odd);
        }
    }

}


/**
 * 检查一个偶数
 * @param  [type] &$primes  [description]
 * @param  [type] $number   [description]
 * @param  [type] &$checked [description]
 * @return [type]           [description]
 */
function goldbach_check(&$primes, $number, &$plus)
{
    if ($number % 2 == 1) return null;

    foreach ($primes as $prime) {
        if ($prime > $number) return false;
        $other = $number - $prime;
        if (in_array($other, $primes)){
            $plus = [$prime, $other];
            return true;
        }
    }
    return false;
}


Goldbach(10000);