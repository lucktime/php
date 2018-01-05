<?php
/*
 *   demo  unset val change 
 */

$a = 'abc';
$b = &$a;
$c = &$a;
unset($b);// 当unset变量b时，如果变量存在引用计数，则只是引用计数-1，如过引用计数为0，则从内存空间移除。
print($a);
