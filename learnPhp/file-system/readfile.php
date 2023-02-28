<?php
/*
$filename = 'readme.txt';
if (file_exists($filename)) {
    echo "file not Exists <br>";
} else {
    die("file not Exists");
}

$f = fopen($filename, 'r');

if ($f) {
    $contents = fread($f, filesize($filename));
    fclose($f);
    echo nl2br($contents);
}
?>

<?php

$filename = 'readme.txt';

if (!is_readable($filename)) {
    die('File does not exist or is not readable');
}

echo file_get_contents($filename);
*/
?>

<?php

// $lines = file(
//     'readme.txt',
//     FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES
// );


// if ($lines) {
//     foreach ($lines as $line) {
//         echo htmlspecialchars($line) . PHP_EOL;
//     }
// }

?>


<?php
$data = [
    ['Symbol', 'Company', 'Price'],
    ['GOOG', 'Google Inc.', '800'],
    ['AAPL', 'Apple Inc.', '500'],
    ['AMZN', 'Amazon.com Inc.', '250'],
    ['YHOO', 'Yahoo! Inc.', '250'],
    ['FB', 'Facebook, Inc.', '30'],
];

$filename = 'file.csv';

$f = fopen($filename, 'w');

if($f == false) {
    die('Error for opening a file');
}else{
    foreach ($data as $row) {
        fputcsv($f, $row);
    }
}


?>