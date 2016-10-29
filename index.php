<meta charset="utf-8">
<?php
require_once 'index1.php';
$classname = "Foo";
call_user_func(array($classname, 'say_hello'));
call_user_func($classname .'::say_hello');
call_user_func('Foo::say_hello'); 
$object = new Foo();
call_user_func(array($myobject, 'say_hello'));
?>