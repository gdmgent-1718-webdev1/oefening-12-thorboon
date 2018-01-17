<?php 
$title = "oefening 12";
$cities = ['Tokyo', 
            'Mexico City', 
            'New York City', 
            'Mumbai', 
            'Seoul', 
            'Shanghai', 
            'Lagos', 
            'Buenos Aires', 
            'Cairo', 
            'London'];
//om een lijst alfabetisch te ordenen
sort($cities);
//dit zet alles in kapitalen
$cities = array_map('strtoupper', $cities);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
</head>
<body>
    <h1><?=$title?></h1>
        <ul>
            <?php foreach($cities as $classKey):?>
                    <li><?=$classKey?></li>
            <?php endforeach ?>
        </ul>  
</body>
</html>