<?php


class Player {
    public $shirtNumber;
    public $name;
    public $surname;
    public $position;
    public $numberOfApperances;
    public $numberOfGoals;
    public $numberOfAssists;
    public $numberOfSaves;

    public function __construct($shirtNumber, $name, $surname, $position, $numberOfApperances, $numberOfGoals, $numberOfAssists, $numberOfSaves){
        $this->shirtNumber = $shirtNumber;
        $this->name = $name;
        $this->surname = $surname;
        $this->position = $position;
        $this->numberOfApperances = $numberOfApperances;
        $this->numberOfGoals = $numberOfGoals;
        $this->numberOfAssists = $numberOfAssists;
        $this->numberOfSaves = $numberOfSaves;
    }
}

?>