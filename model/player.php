<?php


class Player {
    public $shirtNumber;
    public $name;
    public $surname;
    public $position;
    public $numberOfAppearances;
    public $numberOfGoals;
    public $numberOfAssists;
    public $numberOfSaves;

    public function __construct($shirtNumber, $name, $surname, $position, $numberOfAppearances, $numberOfGoals, $numberOfAssists, $numberOfSaves){
        $this->shirtNumber = $shirtNumber;
        $this->name = $name;
        $this->surname = $surname;
        $this->position = $position;
        $this->numberOfAppearances = $numberOfAppearances;
        $this->numberOfGoals = $numberOfGoals;
        $this->numberOfAssists = $numberOfAssists;
        $this->numberOfSaves = $numberOfSaves;
    }
}

?>