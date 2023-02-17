<?php
$capitals = [
    'Japan' => 'Tokyo',
    'France' => 'Paris',
    'Germany' => 'Berlin',
    'United Kingdom' => 'London',
    'United States' => 'Washington D.C.'
];

foreach ($capitals as $key => $value) {
    echo " The Capital of " . $key . " is " . $value;
    echo "<br>";
}
?>


<?php
function init()
{
    $name = "Hello php";
    (function () use ($name) {

        echo $name;
    })();
}
init();

?>

<?php

$lengths = [10, 20, 30];

$areas = array_map(function ($length) {
    return $length * $length;
}, $lengths);

print_r($areas)
?>

<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$even_numbers = array_filter($numbers,  fn ($value) => $value % 2 == 0);
print_r($even_numbers);
?>

<?php

$inputs = [
    'first' => 'John',
    'last' => 'Doe',
    'password' => 'secret',
    'email' => 'john.doe@example.com'
];

$filtered = array_filter(
    $inputs,
    fn ($key) => $key !== 'password',
    ARRAY_FILTER_USE_KEY
);

print_r($filtered);
