<?php

declare(strict_types=1);

//Exercise 3

$languages = ["php", "html", "hp"];

function checkWords(array $lenguages, string $letter): bool
{
    foreach ($lenguages as $word) {
        if (stripos($word, $letter) === false) {
            return false;
        }
    }
    return true;
}

echo "Languages contains h?" . "<br>";
var_dump(checkWords($languages, "h"));

echo "<hr>";
