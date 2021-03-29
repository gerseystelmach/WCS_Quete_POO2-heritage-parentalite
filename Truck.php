<?php

require_once "Vehicle.php";


class Truck extends Vehicle {

    private string $energyType;
    private int $energyLevel;
    private int $stockCapacity;
    private int $load;
    public const ALLOWED_ENERGIES = ['fuel', 'electric'];

    public function __construct(string $color, int $nbSeats, string $energyType, int $stockCapacity) 
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergyType($energyType);
        $this->setStockCapacity($stockCapacity);


    }

    public function start() 
    {   
    
        return 'Engines ready to go forward. ';

    }

            // Getters and Setters de Energy Type

    public function setEnergyType(string $energyType): Truck  
    {
        // La constante étant propre à la classe et non à l'objet, il faut utiliser un nouveau mot-clé self:: qui représente la classe (au lieu de $this qui représente l'instance en cours de la classe).
        if (in_array($energyType, self::ALLOWED_ENERGIES)) 
        {
            $this->energyType = $energyType;
         }
         return $this;
         
    }

    public function getEnergyType(): string 
    {
        return $this->energyType;
    }
        // Getters and Setters de Energy Level

    public function setEnergyLevel(int $energyLevel): void 
    {
        $this->energyLevel = $energyLevel;
    }

    public function getEnergyLevel(): int 
    {

        return $this->energyLevel;
    }
       // Getters and Setters de Stock Capacity

    public function setStockCapacity(int $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }

    public function getStockCapacity(): int 
    {
         return $this->stockCapacity;   
    }

     // Getters and Setters de Load

     public function setLoad(int $load): void 
     {
         $this->load = $load;
     }

     public function getLoad(): int 
     {
        return $this->load;

     }

     public function loadIsFull(): string 
     {
         
        if ($this->load === $this->stockCapacity) 
        {
            return "Capacity full." . PHP_EOL;
        } else {
            return "Filling." . PHP_EOL;
        }
        return $this;

     }
}


