<?php 


/**
 * 圈子出人 
 * N个人围坐 每个P个数字点出一个人. 计算最后一个出去的人
 *
 * 算法1: 做闭环链表 然后循环
 *
 * 
 * @param int $number [description]
 * @param int $gap    [description]
 */
function CircleOut($number,  $gap)
{
    // 创建链表
    $linkList = createLinkList($number);
    $length = $number;

    $start = 0;

    while ($length > 1) {
        if ($gap > $length){
            $gap = $gap%$length;
        }       
        $item = $linkList[$start];
        if ($gap > 1){
            for ($i=0; $i < $gap-1; $i++) { 
                $item = $linkList[$item[1]];
            }
        }
        $start = $item[1];
        deleteLinkListNextItem($linkList, $item);
        // 遍历$gap个元素
        $length--;
        
    }
    return $item[0];
}

/**
 * 创建一个闭环链表 用二位数组表示. 每个元素的数组 第一个元素是数字 第二个元素是指向下个元素的下标.  第三个元素是指向上一个元素的下标
 * @param  [type] $number [description]
 * @return [type]         [description]
 */
function createLinkList($number)
{
    $list = [];
    for ($i=0; $i < $number; $i++) { 
        
        if ($i < $number - 1){
            $list[] = [$i+1, $i+1, $i > 0 ? $i-1 : $number-1];
        }else{
            $list[] = [$i+1, 0, $i-1];
        }

    }
    return $list;
}

/**
 * 移除链表中 指定元素的上一个元素的下标指向后一个元素. 
 * @param  [type] &$linkList [description]
 * @param  [type] $item      [description]
 * @return [type]            [description]
 */
function deleteLinkListNextItem(&$linkList, $item)
{
    // echo $item[0].',';
    $next = $item[1];
    $last = $item[2];
    $linkList[$next][2] = $item[2];
    $linkList[$last][1] = $item[1];
       // 将当前元素的指针指向后一个元素的指针. 
}


$n = CircleOut(100, 7);
echo $n;
