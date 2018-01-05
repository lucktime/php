<?php
/*
 *   对象的传递本身就是 引用传递
 */

class Person{
    public $name = "li";
}

$li = new Person();
xdebug_debug_zval('li');
$zhao = $li;
xdebug_debug_zval('li');
$zhao->name = "zhao";
xdebug_debug_zval('li');
print_r($li->name);