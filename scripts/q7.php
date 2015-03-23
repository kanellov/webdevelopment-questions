<?php

function doSomething (&$arg) 
{
    $return = $arg;
    $arg += 1;
    return $return;
}
$a = 3;
$b = doSomething( $a );
echo sprintf('$a = %d, $b = %d', $a, $b);