<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn eerste project</title>
</head>
<body>
<?php

    $spongebob_main_characters = [
        "SpongeBob" => [
            "age" => 12,
            "job" => "fry cook"
        ],
        "Patrick" => [
            "age" => 12,
            "job" => "unemployed"
        ],
        "Sandy" => [
            "age" => 25,
            "job" => "scientist"
        ],
        "Squidward" => [
            "age" => 35,
            "job" => "cashier"
        ]
    ];
    echo $spongebob_main_characters["Sandy"]["age"];

?>
    
</body>
</html>