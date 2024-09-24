<?php
/*
1. It's possible to reference the class using a variable. 
2. The variable's value can not be a keyword (e.g. self, parent and static).
3. Note that class constants are allocated 
   once per class and not for each class instance.
 
 */
class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}

echo MyClass::CONSTANT . "\n"; //c1

$classname = "MyClass";
echo $classname::CONSTANT . "\n"; //c2

$class = new MyClass(); //khai bao
$class->showConstant(); //c3

echo $class::CONSTANT."\n"; //c4
