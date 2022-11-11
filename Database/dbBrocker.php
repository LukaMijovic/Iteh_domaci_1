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
        $query = "INSERT INTO player VALUES($newPlayer->shirtNumber, $newPlayer->name, $newPlayer->surname, $newPlayer->position, $newPlayer->numberOfApperances, $newPlayer->numberOfGoals, $newPlayer->numberOfAssists, $newPlayer->numberOfSaves)";
        $this->conn->query($query);
    }

    public function getAllPlayers() {
        $query = "SELECT * FROM player";
        return $this->conn->query($query);
    }
}

?>