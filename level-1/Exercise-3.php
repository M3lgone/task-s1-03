<?php

declare(strict_types=1);

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
