<?php
/*
 *   面试题：每次循环data的值是什么？程序执行完成后，变量data的值是多少？
 */
/**
每次循环，data的值
Array
(
    [0] => a
    [1] => b
    [2] => c
)
Array
(
    [0] => b
    [1] => b
    [2] => c
)
Array
(
    [0] => b
    [1] => c
    [2] => c
)
最后结果：
Array
(
    [0] => b
    [1] => c
    [2] => c
)
 */
$data = ['a', 'b', 'c'];
foreach ($data as $key => $value) {
    $value = &$data[$key];
    print_r($data);
}
print_r($data);