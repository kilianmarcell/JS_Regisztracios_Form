<!DOCTYPE html>
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
        <selection class="h2">Név:</selection> <input type="text" id="nevMezo" class="h2"><span id="nevHossz" class="h4"></span><br>
        <selection class="h2">Jelszó:</selection> <input type="password" id="jelszoMezo" class="h2"><span id="jelszoHossz" class="h4"></span><br>
        <selection class="h2">Jelszó ismét:</selection> <input type="password" id="jelszoMegintMezo" class="h2"><span id="jelszoEllenorzes" class="h4"></span><br>
        <input type="submit" id="gomb" class="btn btn-dark btn-lg mt-5 w-50" value="Regisztrál">
        <div class="h2 mt-2" id="sikeresE"></div>
    </form>
</body>
</html>