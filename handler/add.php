<?php

require "../database/dbBrocker.php";
require "../model/player.php";

$db = new DBBrocker();

$newPlayer = new Player($_POST["broj-dres"], $_POST["ime"], $_POST["prezime"], $_POST["pozicija"], $_POST["broj-nastup"], $_POST["broj-golova"], $_POST["broj-asistencija"], $_POST["broj-odbrana"]);

//echo $_POST["broj-dres"];

$status = $db->addPlayer($newPlayer);
if ($status) {
    echo "Success";
}
else {
    echo "Fail";
}

?>