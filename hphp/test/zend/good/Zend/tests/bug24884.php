<?php
class Test {
    function __copy()
    {
        $string = PHP_VERSION;
        $version = $string[0];
        if($string < 5)
        {
            return $this;
        }
        else
        {
            return clone $this;
        }
    }
}
$test = new Test();
$test2 = $test->__copy();
var_dump($test2);
