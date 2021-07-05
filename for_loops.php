<?php
$odd_numbers = [1,3,5,7,9];

foreach ($odd_numbers as $odd_number){
    echo $odd_number . "\n";
}

$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-4856",
];
foreach ($phone_numbers as $name => $number) {
    echo "$name's number is $number. \n";
} 

$even_numbers = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
for ($i=0; $i < count($even_numbers); $i++) {
    $even_number = $even_numbers[$i];
    echo $even_number . "\n";
}
?>