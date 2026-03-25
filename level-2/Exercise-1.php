<?php

declare(strict_types=1);

//Exercise 1

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
