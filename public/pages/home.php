<?php

    require '../../database/dbBrocker.php';

    //session_start();

    $db = new DBBrocker();
    $players = $db->getAllPlayers();

    if (!$players) {
        die();
    }
    else if ($players->num_rows == 0) {
        echo "Nema dostupnih igraca";
        die();
    }
    else {
?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</head>
<body>
    <header>
        <div>
            <a href="/public/pages/home.php"><img id="flamingo-logo" src="../img/flamingo.logo-1-removebg-preview.png" alt="FK Flamingo logo"></a>
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
                        <th scopre="col">Broj nastupa</th>
                        <th scope="col">Golovi</th>
                        <th scope="col">Asistencije</th>
                        <th scope="col">Odbrane</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        while ($res = $players->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $res["shirt_number"] ?></td>
                            <td><?php echo $res["firstname"] ?></td>
                            <td><?php echo $res["surname"] ?></td>
                            <td><?php echo $res["position"] ?></td>
                            <td><?php echo $res["number_appearance"] ?></td>
                            <td><?php echo $res["number_of_goals"] ?></td>
                            <td><?php echo $res["number_of_assists"] ?></td>
                            <td><?php echo $res["number_of_saves"] ?></td>
                        </tr>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <a href="./player_form.php">Dodaj novog igrača</a>
            <a>Obriši igraca</a>
        </section>
    </main>
</body>
</html>