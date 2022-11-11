<?php

//require '../model/player.php';

class DBBrocker {
    public $conn;
    public $dataBaseName;
    public $url;
    public $user;
    public $pass;
    public function __construct() {
        $this->dataBaseName = "iteh_domaci_1";
        $this->url = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->conn = new mysqli($this->url, $this->user, $this->pass, $this->dataBaseName);   
    }

    public function addPlayer($newPlayer) {
        $query = "INSERT INTO player(shirt_number, firstname, surname, position, number_appearance, number_of_goals, number_of_assists, number_of_saves) VALUES($newPlayer->shirtNumber, '$newPlayer->name', '$newPlayer->surname', '$newPlayer->position', $newPlayer->numberOfAppearances, $newPlayer->numberOfGoals, $newPlayer->numberOfAssists, $newPlayer->numberOfSaves)";
        return $this->conn->query($query);
    }

    public function getAllPlayers() {
        $query = "SELECT * FROM player";
        return $this->conn->query($query);
    }

    public function deleteOnePlayer($shirtNumber) {
        $query = "DELETE FROM player WHERE shirt_number = $shirtNumber";
        return $this->conn->query($query);
    }

    public function logInUser($user) {
        $email = $user->email;
        $query = "SELECT * FROM user WHERE email = '$email'";
        $result = $this->conn->query($query);

        //echo $result->num_rows;

        if ($result->num_rows == 0) {
            $_SESSION["message"] = "Ne postoji korisnik";
            //echo $_SESSION["message"];
        }
        else {
            $userFromDb = $result->fetch_assoc();
            if ($user->pass == $userFromDb["pass"]) {
                $_SESSION["email"] = $user->email;
                $_SESSION["pass"] = $user->pass;
                $_SESSION["isLogged"] = true;

                //header("location: ../public/pages/home.php");
            }
        }

        return $result;

    }
}

?>