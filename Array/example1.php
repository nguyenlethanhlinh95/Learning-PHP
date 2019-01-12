<?php
$fruits = ['banana', 'apple'];

/*----------array with forin loop----------*/
foreach ($fruits as $item)
{
    echo $item . '<br>';
}

echo '<br>';

/*----------array with for loop----------*/
$colors = ['red', 'yellow', 'blue', 'green'];
for ($i = 0; $i < count($colors); $i++) {
    echo 'I am the color ' . $colors[$i] . '<br>';
}

/*----------array with keys and values----------*/
//echo '<br>'. "array with keys and values";
$arrays = ["a" => "alpha", "b" => "beta", "c" => "gamma", "d" => "delta"];

foreach ($arrays as $key => $value )
{
    echo $key . " " . $value . "<br>";
}

echo '<br>';

