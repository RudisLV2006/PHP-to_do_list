<?php


class person{
    private $firstName;
    private $lastName;
    private static $personeCode = 0;
    private $distanceTotal;
    private $age;


    public function __construct($firstName,$lastName,$age){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->personeCode++;
        $this->distanceTotal = 0;
    }

    function walk($distance){
        $this->distanceTotal = $distance+$this->distanceTotal;
        echo "Person learned walk and walked $this->distanceTotal\n";
        
    }

}




$person = new person("abc","dd",16);

$person->walk(distance: 10);
$person->walk(distance: 30);