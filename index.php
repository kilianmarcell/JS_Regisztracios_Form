<?php

$sikeresE = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nevMezo = $_POST['nevMezo'] ?? '';
    $jelszoMezo = $_POST['jelszoMezo'] ?? '';
    $jelszoMegintMezo = $_POST['jelszoMegintMezo'] ?? '';

    if (strlen($nevMezo) <= 20 && $nevMezo !== '' && strlen($jelszoMezo) <= 8 && $jelszoMezo !== '' &&
        $jelszoMezo === $jelszoMegintMezo) {

            $sikeresE = true;

    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Regisztráció</title>
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" class="mx-auto w-50 mt-5">
        <selection class="h2">Név:</selection>
        <input type="text" id="nevMezo" name="nevMezo" class="h2">
        <span id="nevHossz" name="nevHossz" class="h4"></span>
        <br>
        
        <selection class="h2">Jelszó:</selection>
        <input type="password" id="jelszoMezo" name="jelszoMezo" class="h2">
        <span id="jelszoHossz" name="jelszoHossz" class="h4"></span>
        <br>

        <selection class="h2">Jelszó ismét:</selection>
        <input type="password" id="jelszoMegintMezo" name="jelszoMegintMezo" class="h2">
        <span id="jelszoEllenorzes" name="jelszoEllenorzes" class="h4"></span>
        <br>

        <input type="submit" id="gomb" class="btn btn-dark btn-lg mt-5 w-50" value="Regisztrál">

        <div class="h2 mt-2">
            <?php
            
                if ($sikeresE) {
                    sleep(2);
                    echo "Sikeres regisztráció!";
                }
            
            ?>
        </div>
    </form>
</body>
</html>