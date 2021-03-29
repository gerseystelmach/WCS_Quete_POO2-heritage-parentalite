<?php

require_once "Vehicle.php";

class Car extends Vehicle
{

    public const ALLOWED_ENERGIES = ['fuel', 'electric'];
    private string $energyType;
    private int $energyLevel;

    ////////////////////////////////////////////// Methods:

    public function __construct(string $color, int $nbSeats, string $energyType) 
    {
        //puxa as informações do construct de Vehicle.php
        parent::__construct($color, $nbSeats);
        $this->setEnergyType($energyType);
        //Maneira alternativa de definir a energia ao inves da formula abaixo.
        /* $this->energyType = $energyType; */

    }
    
    public function start() 
    {   
    
        return 'Engines ready to go forward. ';

    }

    // Getters and Setters de Energy Type
    public function getEnergyType(): string
    {

         return $this->energyType;

    }

    public function setEnergyType(string $energyType): Car  
    {
        // La constante étant propre à la classe et non à l'objet, il faut utiliser un nouveau mot-clé self:: qui représente la classe (au lieu de $this qui représente l'instance en cours de la classe).
        if (in_array($energyType, self::ALLOWED_ENERGIES)) 
        {
            $this->energyType = $energyType;
         }
         return $this;
    }
// Getters and Setters de Energy Level
    public function getEnergyLevel(): string
    {

        return $this->energyLevel;

    }
 

    public function setEnergyLevel(int $energyLevel): void
    {

        $this->energyLevel = $energyLevel;

    }

   /*  public function forward () 

    {
 
    $this->currentSpeed = 30;
    return 'Accelerating... Your currently speed is 30km/h ';
 
}
    

    public function brake () 
    {
    $brakeAlert = "";
        while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $brakeAlert .= "Braking... Speed at " . $this->currentSpeed . " " . PHP_EOL;
       
        }
        $brakeAlert .= "Car stopped.";
        return $brakeAlert;
        

}



    public function getNbWheels(): int
    {
    return $this->nbWheels;

}

    public function getCurrentSpeed(): int
    {
   
    return $this->currentSpeed;

    }

    public function getColor(): string
    {

    return $this->color;

    }

    public function getNbSeats(): string
    {

    return $this->nbSeats;

    } */

  
 }





