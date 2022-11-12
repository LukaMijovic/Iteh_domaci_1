<?php

require "../database/dbBrocker.php";
require "../model/player.php";

$db = new DBBrocker();

$shirtNum = $_POST["broj-dres"];

$status = $db->deleteOnePlayer($shirtNum);

if ($status) {
    echo "Success";
}
else {
    echo "Fail";
}

?>