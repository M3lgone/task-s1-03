<?php

declare(strict_types=1);

$studentsClass = [
    "Marc" => [0, 10, 5, 7, 8],
    "Ana" => [5, 6, 7, 8, 2],
    "Alex" => [9, 6, 7, 8, 4],
    "Max" => [5, 5, 7, 7, 8],
    "Alba" => [7, 7, 5, 8, 6],
];

function mediaCalculate(array $studentsClass)
{
    $totalAdds = 0;
    $totalGrades = 0;

    foreach ($studentsClass as $name => $grades) {

        $media = array_sum($grades) / count($grades);
        echo "$name: $media <br>";

        $totalAdds += $media;
        $totalGrades++;
    }

    $classAverage = $totalAdds / $totalGrades;

    echo "<hr>";
    echo "Average class : $classAverage";
}

mediaCalculate($studentsClass);

echo "<hr>";
