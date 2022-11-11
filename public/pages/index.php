<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FK Flamingo</title>
    <link rel="stylesheet" href="../style/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
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
            <h2>Igrači</h2>
            <div>
                <table id="player-table" class="table table-striped table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#Broj</th>
                        <th scope="col">Ime</th>
                        <th scope="col">Prezime</th>
                        <th scope="col">Pozicija</th>
                        <th scope="col">Golovi</th>
                        <th scope="col">Asistencije</th>
                        <th scope="col">Odbrane</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a href="./player_form.php">Dodaj novog igrača</a>
            <a>Obriši igraca</a>
        </section>
    </main>
</body>
</html>