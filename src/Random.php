<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/16
 * Time: 10:09
 * 随机数 类
 */
namespace MeachineComment;

class Random
{
    /**
     * @param $size
     * @return int
     * 给出 size 然后得到 余数
     */
    public static $num;
    public static function get($size)
    {
        self::$num = time() % $size ;
        return  self::$num;
    }
    
    public static function next()
    {
        self::$num ++;
        return self::$num;
    }
}
