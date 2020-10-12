<?php
// Car.php

class Car
{
    /**
     * @var integer
     */
    private $nbWheels = 4;

    /**
     * @var integer
     */
    private $currentSpeed = 0;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel = 0;

    //Setters:

    /**
     * @param string $color
     * @param integer $nbSeats
     * @param string $energy
     * @return void
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    //Getters:

    /**
     * @return integer
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @return integer
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return integer
     */
    public function  getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @return integer
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    //Methods

    public function forward()
    {
        $sentence = "";
        while ($this->energyLevel > 1) {
            $this->energyLevel--;
            $sentence .= "So far, so good !";
        }
        $sentence .= "Oh no ! almost empty tank ! Need to stop !";
        $this->currentSpeed = 10;
        return $sentence;
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start()
    {
        $this->energyLevel = 10;
        return "Tank full, Go !";
    }

    public function dump()
    {
        var_dump($this);
    }
}