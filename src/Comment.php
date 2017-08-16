<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/16
 * Time: 11:10
 * 自动评论
 */
namespace MeachineComment;

class Comment
{
    public $size;
    public $comments;
    
    public function __construct()
    {
        $this->comments = require_once __DIR__.'/configs/comments.php';
        $this->size = count($this->comments);
    }
    public function index()
    {
        var_dump('size:',$this->size);
        var_dump('comments',$this->comments);
    }
    
    public function pop()
    {
        $index = Random::get($this->size);
        return $this->comments [$index];
    }
    
    public function next()
    {
        $index =  Random::next();
        return isset($this->comments [$index]) ? $this->comments [$index] : $this->comments [0] ;
    }
}