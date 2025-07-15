<?php

class Amphora
{
    //Good Practice: Properties by default are private, and we access them via public methods
    private int $capacity;
    private int $filling = 0; //initializing a property by default does not need to be re-initialized by a constructor evidently
    private string $label;
    private const MAX_LABEL_LENGTH = 50;

    //Constructor comes after the properties

    public function __construct(string $_label, int $_capacity)
    {
        $this->label = $_label;
        $this->capacity = $_capacity;
    }

    //We use public functions to modify the private properties of the class
    public function fill(int $volume): void
    {
        if (($this->filling + $volume) <= $this->capacity) {
            $this->filling += $volume;
        }
    }

    public function empty(int $volume): void
    {
        if (($this->filling - $volume) >= 0) {
            $this->filling -= $volume;
        }
    }

    //Getters et setters
    public function setLabel(string $labelName): void
    {
        if (strlen($labelName) <= self::MAX_LABEL_LENGTH) {
            $this->label = $labelName;
        } else
            echo "Label name must be less than 50 characters long!";
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $_capacity): void
    {
        $this->capacity = $_capacity;
    }

    //We use only getter for filling because we have fill/empty functions to control the its bahaviour
    public function getFilling(): int
    {
        return $this->filling;
    }

    public function getRemainingCapacity(): int
    {
        return ($this->capacity - $this->filling);
    }

}

