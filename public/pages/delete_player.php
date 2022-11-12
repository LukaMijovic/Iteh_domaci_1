<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obiris igraca</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/player_form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" defer></script>
    <script src="../scripts/delete.js" defer></script>
</head>
<body>
    <header>
            <div>
                <a href="./home.php"><img id="flamingo-logo" src="../img/flamingo.logo-1-removebg-preview.png" alt="FK Flamingo logo"></a>
                <h1 id="test_naslov">Zvanučna stranica fudbalskog kluba Flamingo</h1>
            </div>
    </header>
    <section id="sec-1">
        <form id="deletePlayerForm" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="broj-dres">Broj na dresu</label>
                <input type="number" class="form-control" id="broj-dres" name="broj-dres" placeholder="Unesite broj igraca kog zelite da obrisete" required>
                </div>
            </div>
            <button id="deletePlayer" type="submit">Obrisi</button>
            </form>
        </section>
</body>
</html>