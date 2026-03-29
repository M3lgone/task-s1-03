<?php

declare(strict_types=1);

//Exercise 2

$elements = [10,20,30,40,50,60];

echo "Result index count: " . "<br>" . count($elements) . "<br>";

unset($elements[4]);

$elements = array_values($elements);

echo "Result index count after normalize: " . "<br>" . count($elements) . "<br>";

print_r($elements) . "<br>";


echo "<hr>";
