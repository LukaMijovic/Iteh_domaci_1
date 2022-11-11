<?php

class DBBrocker {

    private static $dbBrocker = new DBBrocker();
    public $conn;
    public static $status = false;
    public $dataBaseName;
    public $url;
    public $user;
    public $pass;
    private function __construct() {
        $this->dataBaseName = "iteh_domaci_1";
        $this->url = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->conn = new mysqli($this->url, $this->user, $this->pass, $this->dataBaseName);   
    }

    public static function getDBBrocker() {
        if (DBBrocker::$status) {
            return DBBrocker::$dbBrocker;
        }
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