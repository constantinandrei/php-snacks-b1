<?php

/* 
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.

*/

$alunni = [

    ["nome" => "Michele",
    "cognome" => "Genovese",
    "voti" => [4, 7, 9, 4, 6]],

    ["nome" => "Michela",
    "cognome" => "Gianfoglia",
    "voti" => [4, 3, 9, 4, 10]],

    ["nome" => "Sauro",
    "cognome" => "Dinesi",
    "voti" => [8, 8, 8, 8, 8, 10]],

    ["nome" => "Alesandro",
    "cognome" => "Albani",
    "voti" => [5, 7, 9, 9, 10]],

    ["nome" => "Marika",
    "cognome" => "Priamo",
    "voti" => [6, 5, 3, 8, 4]],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Snack 7</title>
    <style>
        .rounded-pill {
            min-width: 60px;
        }
    </style>
</head>
<body>
    <div class="py-5">
        <div class="container">
            <div class="row g-3">

                
                    <?php for ($i = 0; $i < count($alunni); $i++) { 
                        $sommaVoti = 0;
                        $alunno = $alunni[$i];
                        for ($j = 0; $j < count($alunno["voti"]); $j++){
                            $sommaVoti += $alunno["voti"][$j];
                            
                        } ?>
                        <div class="col col-5">
                            <div class="card p-3">
                                <div class="card-title">
                                    Nome: <?php echo $alunno["nome"] ?><br>
                                    Cognome: <?php echo $alunno["cognome"] ?><br>
                                </div>

                                <div class="card-text">
                                    Media Voti: <?php echo $sommaVoti / count($alunno["voti"]) ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                
            </div>
        </div>
    </div>
</body>
</html>