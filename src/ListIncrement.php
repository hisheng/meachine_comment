<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/21
 * Time: 10:39
 * 顺序队列
 */
namespace MeachineComment;
class ListIncrement
{
    public function pop()
    {
        $redis = new \Redis();
        $incr = $redis->incr('ListIncrement');
        if($incr > 148)
        {
            $redis->del('ListIncrement');
        }
        return $incr;
        
    }
}

