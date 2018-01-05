<?php

$data = "abc";
$refdata = &$data;
$refdata = 'bcd';

print_r($data);
?>