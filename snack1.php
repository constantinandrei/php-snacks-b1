<?php

/* 
    ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

*/

$tappaBasket = [

    ["sqCasa" => "Santa Maria a Monte",
    "puntiSqCasa" => 78,
    "sqOspite" => "Pontedera",
    "puntiSqOspite" => 45],

    ["sqCasa" => "Livorno",
    "puntiSqCasa" => 34,
    "sqOspite" => "Pisa",
    "puntiSqOspite" => 173],

    ["sqCasa" => "Milano",
    "puntiSqCasa" => 87,
    "sqOspite" => "Palermo",
    "puntiSqOspite" => 88],

    ["sqCasa" => "Torino",
    "puntiSqCasa" => 78,
    "sqOspite" => "Brescia",
    "puntiSqOspite" => 95],

    ["sqCasa" => "Vicenza",
    "puntiSqCasa" => 46,
    "sqOspite" => "Ponsacco",
    "puntiSqOspite" => 45],

    ["sqCasa" => "Siberia",
    "puntiSqCasa" => 80,
    "sqOspite" => "Usigliano",
    "puntiSqOspite" => 70],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Snack 1</title>
</head>
<body>
    <div class="py-5">
        <div class="container">
            <div class="row g-3 row-cols-3">

            <?php for ($i = 0; $i < count($tappaBasket); $i++) { ?> 
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title"><?php echo $tappaBasket[$i]["sqCasa"] . ' - '  . $tappaBasket[$i]["sqOspite"] . ' | ' . $tappaBasket[$i]["puntiSqCasa"] . '-' . $tappaBasket[$i]["puntiSqOspite"]?></div>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>