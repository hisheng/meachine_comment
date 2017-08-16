<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/15
 * Time: 12:07
 * 水军账号控制
 */
namespace MeachineComment;

class User
{
    public $size;
    public $userids;
    
    public function __construct()
    {
        $this->userids = require_once __DIR__.'/configs/userids.php';
        $this->size = count($this->userids);
    }
    public function index()
    {
        var_dump('size:',$this->size);
        var_dump('userids',$this->userids);
    }
    
    public function pop()
    {
    
    }
}