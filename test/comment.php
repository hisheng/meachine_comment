<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/16
 * Time: 11:19
 */
require_once __DIR__.'./../vendor/autoload.php';

$c = new \MeachineComment\Comment();
//$c->index();
var_dump($c->pop());
var_dump($c->next());