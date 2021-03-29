<?php

class Vehicle {

    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels; 

    public function __construct (string $color, int $nbSeats) 
    
    {
    
        $this->color = $color;
        $this->nbSeats = $nbSeats;

    }

    public function forward () 
    
    {
        
        $this->currentSpeed = 15;
        return "Go! ";

    }

    public function brake () 
    {
        $brakeAlert = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $brakeAlert .= "Slowing down, speed at: " . $this->currentSpeed . ' km/h' . PHP_EOL;
            // Se eu não concatenar o brakeAlert, só vai me exibir 1 vez a mensagem com velocidade 0
        }

        $brakeAlert .= "Vehicle stopped.";
        return $brakeAlert;

    }
    // CURRENT SPEED Getter and Setter
    public function setCurrentSpeed(int $currentSpeed): void 
    {
        if ($currentSpeed >= 0) {
            
            $this->currentSpeed = $currentSpeed;
        }
        

    }


    public function getCurrentSpeed(): int 
    {
        return $this->currentSpeed;

    }

    // Color Getter and Setter

    public function setColor(string $color): void 
    {

        $this->color = $color;

    }

    public function getColor(): string 
    {

        return $this->color;

    }

    // Number Seats Getter and Setter

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;

    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

     // Number Wheels Getter and Setter - la méthode affecte une valeur à la propriété nbWheels mais tu n'as pas de "return" donc la méthode ne retourne rien => typage en void

    public function getNbWheels(): int 
    {
         return $this->nbWheels;

    }

    public function setNbWheels(int $nbWheels): void 
    {
        $this->nbWheels = $nbWheels;

    }


}
