<?php
/*
 *   demo 1 赋值变量的内存空间变化
 */
print('******************$b=$a memacache Change Begin**********************');
print("\n");
$a = range(0,1000);
var_dump(memory_get_usage());
$b = $a;//赋值： 根据cow 原则，只有变量修改时，才会copy。
var_dump(memory_get_usage());

print('******************$b=$a memacache Change End**********************');
print("\n");
$a = range(0,1000);
var_dump(memory_get_usage());


/**
 *   demo 2 引用的内存空间变化
 */
 print('******************$b=$a memacache Change Begin**********************');
 print("\n");
 $c = range(0,1000);
 var_dump(memory_get_usage());
 $d = &$c;//引用：
 var_dump(memory_get_usage());
 
 print('******************$b=$a memacache Change End**********************');
 print("\n");
 $c = range(0,1000);
 var_dump(memory_get_usage());

/**
 *  demo 3 xdebug的使用，引用时内存结构体的变化 
*/

print('******************demo3 ref val change  Begin**********************');
print("\n");
$test = "abc";
xdebug_debug_zval('test');
$reftest = &$test;
print('******************ref val change  End**********************');
print("\n");
xdebug_debug_zval('reftest');

?>
