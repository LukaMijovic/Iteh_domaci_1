<?php

require "../database/dbBrocker.php";
require "../model/player.php";

$db = new DBBrocker();
$newUser = new User($_POST["email"], $_POST["pass"]);
$status = $db->logInUser($newUser);

if ($status) {
    echo "Success";
}
else {
    echo "Fail";
}

?>