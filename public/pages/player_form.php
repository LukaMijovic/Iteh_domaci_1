<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">    
    <link rel="stylesheet" href="../style/player_form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" defer></script>
    <script src="../scripts/main.js" defer></script>
    <title>Dodaj igraca</title>
</head>
<body>
    <header>
        <div>
            <a href="index.php"><img id="flamingo-logo" src="../img/flamingo.logo-1-removebg-preview.png" alt="FK Flamingo logo"></a>
            <h1>Zvanučna stranica fudbalskog kluba Flamingo</h1>
        </div>
    </header>
    <main>
        <section id="sec-1">
        <form id="addPlayerForm" action="#" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="ime">Ime</label>
                <input type="text" class="form-control" id="ime" name="ime" placeholder="Ime" required>
                </div>
                <div class="form-group col-md-6">
                <label for="prezime">Prezime</label>
                <input type="text" class="form-control" id="prezime" name="prezime" placeholder="Prezime" required>
                </div>
                <div class="form-group col-md-6">
                <label for="pozicija">Pozicija</label>
                <input type="text" class="form-control" id="pozicija" name="pozicija" placeholder="Pozicija" required>
                </div>
                <div class="form-group col-md-6">
                <label for="broj-dres">Broj na dresu</label>
                <input type="number" class="form-control" id="broj-dres" name="broj-dres" placeholder="#Broj" required>
                </div>
                <div class="form-group col-md-6">
                <label for="broj-nastup">Broj nastupa</label>
                <input type="number" class="form-control" id="broj-nastup" name="broj-nastup" placeholder="Broj nastupa" required>
                </div>
                <div class="form-group col-md-6">
                <label for="broj-golova">Broj golova</label>
                <input type="number" class="form-control" id="broj-golova" name="broj-golova" placeholder="Broj golova" required>
                </div>
                <div class="form-group col-md-6">
                <label for="broj-asistencija">Broj asistencija</label>
                <input type="number" class="form-control" id="broj-asistencija" name="broj-asistencija" placeholder="Broj asistencija" required>
                </div>
                <div class="form-group col-md-6">
                <label for="broj-odbrana">Broj odbrana</label>
                <input type="number" class="form-control" id="broj-odbrana" name="broj-odbrana" placeholder="Broj odbrana" required>
                </div>
            </div>
            <button id="addPlayer" type="submit">Dodaj</button>
            </form>
        </section>
    </main>
</body>
</html>