<?php

/* 
## Snack 4
Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

*/

$numArray = [];

while (count($numArray) < 15){
    $randomNum = rand(1, 100);
    if (!in_array($randomNum, $numArray)){
        $numArray[] = $randomNum;
    }
}

$classArray = ['primary', 'success', 'danger', 'warning', 'info', 'dark']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Snack 4</title>
    <style>
        .rounded-pill {
            min-width: 60px;
        }
    </style>
</head>
<body>
    <div class="py-5">
        <div class="container">
            <div class="row g-3 justify-content-center">

                <div class="col col-9">
                    <?php for ($i = 0; $i < count($numArray); $i++) { 
                        $randIndex = rand(0, 5) ?>
                        <div class="rounded-pill text-center p-3 text-bg-<?php echo $classArray[$randIndex] ?> d-inline-block">
                            <?php echo $numArray[$i] ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>