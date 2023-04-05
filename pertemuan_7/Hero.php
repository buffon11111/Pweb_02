<?php
class Hero{
    public $nama;
    public $health;
    public $damage;
    public $level = 1;


    public function __construct($nama, $health, $damage)
    {
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
    }


    public function getInfo(){
        echo "<br> Nama: " . $this->nama; 
        echo "<br> HP: " . $this->health;
        echo "<br> Damage: " . $this->damage;
        echo "<br> Level: " . $this->level;
    }

    public function levelUp($number){
        $this->level = $this->level + $number;
        $this->health = $this->health + (200 * $number);
        $this->damage = $this->damage + (50 * $number);

    }
}

$hero1 = new Hero("Reymond", 3200, 200); 

$hero2 = new Hero( "Denver", 5200, 50); 

$hero1->getInfo();

echo "<hr>";

$hero1->levelUp(4);

$hero1->getInfo(); 
