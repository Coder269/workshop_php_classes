<?php

class Boat
{
    private string $name;
    private int $speed;
    private array $amphoras = [];

    public function __construct(string $_name, int $_speed)
    {
        $this->name = $_name;
        $this->speed = $_speed;
    }

    public function load(Amphora $amphora): void
    {
        $this->amphoras[] = $amphora;
    }

    public function listCargo(): void
    {
        if (count($this->amphoras) > 0) {

            $countAmphora = count($this->amphoras);
            $totalCapacity = 0;
            foreach ($this->amphoras as $amphora) {
                $totalCapacity += $amphora->getCapacity();
            }

            echo "There are $countAmphora amphoras loaded into this boat!" . PHP_EOL;

            echo "The total capacity of the loaded amphoras is $totalCapacity" . PHP_EOL;

        } else
            echo "There are no amphoras loaded into this boat!" . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }


}