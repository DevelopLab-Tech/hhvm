<?php

$test = $v ==> $v;

$arr = array(() ==> $GLOBALS['arr'], 2);

var_dump($arr[$test(1)]);
var_dump($arr[$test(0)]() == $arr);

