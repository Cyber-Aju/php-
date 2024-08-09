<!DOCTYPE html>
<html>
<body>

<?php
$dataArr = [
    [
        "ID" => "1",
        "Name" => "SMyl",
        "Gender" => "1",
        "Class" => "32"
    ],
    [
        "ID" => "2",
        "Name" => "Ajmal",
        "Gender" => "1",
        "Class" => "32"
    ],
    [
        "ID" => "3",
        "Name" => "Akram",
        "Gender" => "1",
        "Class" => "32"
    ],
    [
        "ID" => "4",
        "Name" => "Dazzy",
        "Gender" => "1",
        "Class" => "32"
    ]
];

$jsonArr = json_encode($dataArr, JSON_PRETTY_PRINT);

try{
    $filewrite = fopen("filejson.txt", "w");
    if($filewrite===false)
    {
        throw new Exception("Failed to open for writing");
    }
    if((fwrite($filewrite, $jsonArr)) === false)
    {
        throw new Exception("Failed to write data from file");
    }
    fclose($filewrite);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
    exit;
}

try {
    $filewrite = fopen("filejson.txt", "r");
    if($filewrite === false)
    {
        throw new Exception("Failed to open fro reading");
    }
    if(($jsonFromFile = fread($filewrite, filesize("filejson.txt")))===false)
    {
        throw new Exception("Failed to read data from file.");
    }
    fclose($filewrite);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
    exit;
}



$data = json_decode($jsonFromFile, true);

$inp = 'ID'; 

function searchAndPrint($data, $inp) {
    foreach ($data as $entry) {
        if (isset($entry[$inp])) {
            echo $entry[$inp] . "<br>";
        } else {
            echo "Key '$inp' not found in data.<br>";
            return;
        }
    }
}

searchAndPrint($data, $inp);

?>

</body>
</html>
