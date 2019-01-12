<?php
/**
 * Created by PhpStorm.
 * User: Computer of Linh
 * Date: 1/12/2019
 * Time: 2:34 PM
 */
$fruit = array("bananas", "apples", "peaches");
unset($fruit[1]);

print_r($fruit);


echo "<br>";
// array sort
$fruits = ['Zitrone', 'Orange', 'Banane', 'Apfel'];
sort($fruits);
print_r($fruits);

echo "<br>";

$today = date("y/m/y");
echo $today;

