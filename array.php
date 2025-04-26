<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fruits = ["Apple","bannana"];
    echo $fruits[0];
    $fruits[0] = "Mango";
    echo $fruits[0];

    //remove the value of an indix of an array
    // unset($fruits[0]);
    echo $fruits[0];
    echo "<br>";

    //Set custom keys for an array
    $names = [
        "First" => "Bishal",
        "Second" => "sefsfe",
        "Third" =>"Rahim"
    ];
    echo $names['Second'];
    echo "<br>";

    //print full array
    print_r($fruits);
    echo "<br>";

    //print length of the array
    echo count($names);
    echo "<br>";

    //short the array
    // sort($names);
    // print_r($names);
    // echo "<br>";

    //array push
    array_push($fruits,"Orange");
    print_r($fruits);
    
    echo "<br>";
    $names["Fourth"] = "Akbar";
    print_r($names);
    echo "<br>";

    //delete a specipt data from an array
    array_splice($names,0,1);
    print_r($names);
    echo "<br>";
    
    //replace a value of a adata inside of an array
    array_splice($fruits,0,0,  "Pinaple");
    print_r($fruits);
    echo "<br>";


    //Nested array 
    $places =[
        array("Garia","Sonarpur"),
        "Kolkata",
        "Delhi",
        "Pune"
    ];

    $food = [
        "fruits" => array("Apple","Pinaple","Mango"),
        "meat" => array("Chicken","Beaf","Pork")
    ];

    echo $places[0][1];
    echo "<br>";
    echo $places[1];
    echo "<br>";
    echo $food["meat"][0];
    ?>
</body>
</html>