<?php

/* 
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/
$name = key_exists('name', $_GET) ? trim($_GET['name']) : '';
$mail = key_exists('mail', $_GET) ? trim($_GET['mail']) : '';
$age = key_exists('age', $_GET) ? trim($_GET['age']) : '';

if (strlen($name) > 3){
    $nameOk = true;
};

if (strrchr($mail, '.') && strrchr($mail, '@')){
    $mailOk = true;
};

if (is_numeric($age)){
    $ageOk = true;
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Snack 2</title>
</head>
<body>
    <div class="py-5">
        <div class="container">
            <div class="row g-3 justify-content-center">

                <div class="col col-3">
                    <div class="alert alert-<?php echo isset($nameOk, $mailOk, $ageOk) ? 'success' : 'danger' ?>">
                    <?php echo isset($nameOk, $mailOk, $ageOk) ? 'Accesso riuscito' : 'Accesso negato' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>