<?php

require "./database/dbBrocker.php";
require "./model/user.php";

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="public/style/style.css">
    <link rel="stylesheet" href="public/style/index.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" defer></script>
    <script src="./public/scripts/logIn.js" defer></script>
</head>
<body>
    <header>
        <div>
            <a href="home.php"><img id="flamingo-logo" src="public/img/flamingo.logo-1-removebg-preview.png" alt="FK Flamingo logo"></a>
            <h1>Zvanučna stranica fudbalskog kluba Flamingo</h1>
        </div>
    </header>
    <main>
        <section id="sec-1">
            <h2>Prijava</h2>
            <form id="log-in" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unesite email">
                    <small id="emailHelp" class="form-text text-muted">Vasi podaci su bezbedni sa nama</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sifra</label>
                    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Unesite sifru">
                </div>
                <button type="submit" class="btn btn-primary">Prijavi se</button>
            </form>
        </section>
    </main>
</body>
</html>