<?php 

// +----------------------------------------------------------------------
// | 文件 Arr.class.php
// +----------------------------------------------------------------------
// | 说明 数组相关的扩展库
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Author: 谢赤心 Legend. <xcx_legender@qq.com>
// +----------------------------------------------------------------------

class Arr
{

    /**
     * Get a subset of the items from the given array.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return array
     */
    public static function only(array $array, $keys)
    {
        return array_intersect_key($array, array_flip((array) $keys));
    }

}