<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function __autoload($classname)
{
    include_once "classes/$classname.php";
}

$test = new test("test data");
//echo $test->create('chaitali', 'nitin', 'patel');
test::create();
