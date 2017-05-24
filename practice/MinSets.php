<?php 

$minSets = [
    '1' => [1],
    '2' => [1,2],
    '3' => [1,2,3],
];


/**
 * 给定一个数  然后求 一个数组  数组里面的元素满足 最小是1 然后其他数 是任意一个数的2倍 或者是其他两个数之和.  并且互不相同.   然后求和最小的这个数组
 * @param [type] $number [description]
 */
function MinSets($number)
{
    $set = FindMinSets($number);
    return $set;
}


function FindMinSets($number){
    global $minSets;
    if (array_key_exists(strval($number), $minSets)){
        return $minSets[strval($number)];
    }

    if ($number%2==0){
        $next = $number/2;
        $sub = FindMinSets($next);
    }else {
        $start = floor(sqrt($number));
        $sets = [];
        for ($i = $start; $i <= ceil($number/2); $i++) { 
    
            $set1 = FindMinSets($i);
            $set2 = FindMinSets($number - $i);
            $set = union($set1, $set2);
            $sets[] = $set;
        }
        $sub = setMin($sets);
    }
    $sub[] = $number;
    sort($sub);
    $minSets[$number] = $sub;
    return $minSets[$number];
}

function setMin($sets){
    if (!is_array($sets[0])){
        return $sets;
    }else {

        $min = 0;
        $minKey = 0;

        foreach ($sets as $key => $set) {
            $sum = array_sum($set);
            if ($min == 0 || $sum < $min){
                $min = $sum;
                $minKey = $key;
            }
        }
        return $sets[$minKey];
    }
}


function union($set1, $set2){
    return array_unique(array_merge($set1, $set2));
}

$set = MinSets(7);
print_r($set);