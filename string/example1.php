<?php
/**
 * Created by PhpStorm.
 * User: Computer of Linh
 * Date: 1/12/2019
 * Time: 3:26 PM
 */

// Example of calling a method on an instantiated object
class Person {
    function say_hello() {
        return "Hello!";
    }

    private function __construct()
    {
        $this->say_hello();
    }
}

$max = new Person();
echo "Max says: {$max->say_hello()}";
