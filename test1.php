<?php
/**
 * Created by PhpStorm.
 * User: Computer of Linh
 * Date: 1/11/2019
 * Time: 10:35 PM
 */

class test1
{
    public  function  __construct()
    {
        $function = "doSomeThing";
        $this->$function("Hello");
    }

    private function doSomeThing($string){
        echo $string;
    }
}

new test1();

$myarray = [ "Hello", "World" ];


$array = array([1, 2, 3, 4, 5, 6, 9, 12]);
foreach ($array as $p){
    echo  $p;
}
