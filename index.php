<?php

include __DIR__ . "/functions.php";

$parola = generate_password($_GET["lunghezza"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
    body {
        background-color: #001632;
    }

    .result-color {
        background-color: #cff4fc;
    }
    </style>
</head>

<body>

    <div class="  mb-5 text-center  ">

        <h1 class=" mb-5 text-secondary">Strong Password Generator</h1>
        <h2 class=" mb-5 text-light ">Genera una password sicura</h2>


        <div class="container">

            <div class="result-color text-success  rounded-1 p-4 mb-4">
                <?php if (is_null($parola)) : ?>
                <h4>Nessun parametro valido inserito</h4>
                <?php else : ?>

                <h4>La tua nuova password è: <?= $parola ?> </h4>
                <?php endif ?>
            </div>

            <div class=" text-bg-light p-5 rounded-1">
                <form action="index.php" method="get">

                    <div class="mb-3 d-flex justify-content-between px-5">
                        <h4>Lunghezza Password</h4>
                        <input type="number" name="lunghezza" class="w-25 form-control" id="lunghezza"
                            aria-describeby="lunghezzaHelper" placeholder="max 86 ">
                    </div>

                    <button type="submit" class="p-2 px-4 btn btn-primary text-left">Invia</button>

                </form>

            </div>
        </div>




    </div>





</body>

</html>