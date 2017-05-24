<?php

// 应用最大公告数
require_once "./GreaterCommonDivisor.php";

/**
 * 最小公倍数
 * @param [type] $n1 [description]
 * @param [type] $n2 [description]
 */
function LCM($n1, $n2)
{

    $gcd = GreaterCommonDivisor($n1, $n2);
    return  $n1 * $n2/$gcd;
}


$n = LCM(24, 36);
echo $n;