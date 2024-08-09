<?php
$dataArr = [
    ["ID", "Name", "Gender", "Class"],
    [1, "SMyl", 1, 32],
    [2, "Ajmal", 1, 32],
    [3, "Akram", 1, 32],
    [4, "Dazzy", 1, 32],
];

$file = fopen("data.csv", "w");

foreach ($dataArr as $row) {
    fputcsv($file, $row);
}

fclose($file);

echo "Data written to data.csv successfully! <br>";

$input = 'ID';

$file = fopen("data.csv", "r");

if ($file === false) {
    die("Error opening the file.");
}

// Read the first row to get the headers
$headers = fgetcsv($file);
if ($headers === false) {
    die("Error reading headers.");
}

// Determine the column index based on the input variable
$columnIndex = array_search($input, $headers);
if ($columnIndex === false) {
    die("Column '$input' not found in CSV file.");
}

// Read and print the data based on the selected column
while (($row = fgetcsv($file)) !== false) {
    echo "$input: " . $row[$columnIndex] . "<br>";
}
fclose($file);
?>
