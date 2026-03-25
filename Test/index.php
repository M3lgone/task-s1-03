<?php

// Exercise 1
$list = [10,20,30,40,50];


foreach ($list as $number) {
    echo $number . ", ";
}

echo "<br>" . "-------------" . "<br>" . "<br>";


//Exercise 2

$elements = [10,20,30,40,50,60];

echo "Result index count: " . "<br>" . count($elements) . "<br>";

unset($elements[4]);

$elements = array_values($elements);

echo "Result index count after normalize: " . "<br>" . count($elements) . "<br>";

print_r($elements) . "<br>";


echo "<br>" . "-------------" . "<br>" . "<br>";


//Exercise 3

$lenguages = ["php", "html", "hp"];

function checkWords($lenguages, string $letter)
{

    foreach ($lenguages as $word) {

        if (!str_contains($word, $letter)) {
            return false;
        }
    }
    return true;
}

echo "Lenguages contains h?" . "<br>";
var_dump(checkWords($lenguages, "h"));

echo "<br>" . "-------------" . "<br>" . "<br>";


//Exercise 4

$personal = [
 "name" => "Ismael",
 "age" => "36",
 "mail" => "ismaelgn89@gmail.com",
 "food" => "pasta"
];

echo $personal["name"] . "<br>";
echo $personal["age"] . "<br>";
echo $personal["mail"] . "<br>";
echo $personal["food"] . "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";

//Exercise 1-lvl2

$guestList1 = ['Homer', 'Marge', 'Lisa', 'Bart','Maggui'];

$guestList2 = ['Homer', 'Bart', 'Moe', 'Skinner','Burns'];

$result1 = array_intersect($guestList1, $guestList2);
echo "Output 1: " . implode(", ", $result1) . "<br><br>";


$combine = array_merge($guestList1, $guestList2);
$result2 = array_unique($combine);
echo "Output 2: " . implode(", ", $result2) . "<br><br>";


$result3 = array_diff($guestList1, $guestList2);
echo "Output 3: " . implode(", ", $result3) . "<br><br>";


$result4 = array_diff($guestList2, $guestList1);
echo "Output 4: " . implode(", ", $result4) . "<br><br>";



echo "<br>" . "-------------" . "<br>" . "<br>";

//Exercise 2-lvl2
