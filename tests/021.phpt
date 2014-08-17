--TEST--
Test UString::insert
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$std = "こんにちは世界";
$string = new UString($std);

$string->replaceSlice("hello", 1, 1);

var_dump((string) $string);
?>
--EXPECTF--
string(23) "%shello%s"

