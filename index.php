<?php

// Exercise 1
$list = [10,20,30,40,50];

?>

<ul>
<?php foreach ($list as $number) : ?>
    <li><?= $number ?></li>
<?php endforeach; ?>
</ul>

<?php

//Exercise 2
echo "<br>" . "-------------" . "<br>" . "<br>";

$elements = [10,20,30,40,50,60];

echo "Result index count: " . "<br>" . count ($elements) . "<br>";

unset($elements[4]);

$elements = array_values($elements);

echo "Result index count after normalize: " . "<br>" . count ($elements) . "<br>";

print_r($elements) . "<br>";



echo "<br>" . "-------------" . "<br>" . "<br>";

//Exercise 3

$lenguages = ["php", "html", "hp"];

function checkWords ($lenguages, string $letter){

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

?>