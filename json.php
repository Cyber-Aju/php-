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

$jsonArr = json_encode($dataArr, JSON_PRETTY_PRINT); //JSON_PRETTY_PRINT makes JSON data more human-readable(space, tabs, newline), which is especially useful for debugging and understanding complex JSON structures.

# echo "<pre>$jsonArr</pre>";

/* $jsonobj = '[{
    "ID": "1",
    "Name": "SMyl",
    "Gender": "1",
    "Class": "32"
    },

    {
    "ID": "2",
    "Name": "Ajmal",
    "Gender": "1",
    "Class": "32"
    },

    {
    "ID": "3",
    "Name": "Akram",
    "Gender": "1",
    "Class": "32"
    },

    {
    "ID": "4",
    "Name": "Dazzy",
    "Gender": "1",
    "Class": "32"
    }
    ]'; */
 
 $data = (json_decode($jsonArr, true)); // true is the returned object will be converted into an associative array. When set to false, it returns an object. False is default

 foreach ($data as $entry) {
    echo $entry['Name'] . "<br>";
}
?>

</body>


</html>
