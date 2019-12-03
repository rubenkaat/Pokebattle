<?php

class Pokemon {
	public $name ='';
    public $energytype ='';
    public $health =0;
    public $attacks =[];
    public $weakness = [];
    public $resistance =[];


public function __construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance)
    {
        $health = $hitpoints;
        $this->name = $name;
        $this->energytype = $energytype;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
    public function attack($enemy, $attack){
        $damage = $this->attacks[$attack][1];

        if ($this->energytype == $enemy->weakness[0]) {
           $damage = $damage * $enemy->weakness[1];
        }
        if ($this->energytype == $enemy->resistance[0]) {
           $damage -= $enemy->resistance[1];
        }
        $enemy->health-=$damage;
    }
 public function __toString() {
      	return json_encode($this);
    }

}