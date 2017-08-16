<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/16
 * Time: 10:23
 */
require_once __DIR__.'./../vendor/autoload.php';

$r = new \MeachineComment\Random();
var_dump($r::get(5));