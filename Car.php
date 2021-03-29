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
        //Get __construct from Vehicle.php
        parent::__construct($color, $nbSeats);
        $this->setEnergyType($energyType);
        //Alternative way to set a parameter
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

   /

  
 }





