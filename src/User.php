<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/15
 * Time: 12:07
 * 水军账号控制
 */
namespace MeachineComment;

use MeachineComment\Random;

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
        $index = Random::get($this->size);
        return $this->userids [$index];
    }
    
    public function next()
    {
        $index =  Random::next();
        return isset($this->userids [$index]) ? $this->userids [$index] : $this->userids [0] ;
    }
}