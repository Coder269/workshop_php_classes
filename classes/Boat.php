<?php

class Boat
{
    private string $name;
    private int $speed;
    private array $amphora = [];

    public function __construct(string $_name, int $_speed)
    {
        $this->name = $_name;
        $this->speed = $_speed;
    }

    public function load(Amphora $amphora): void
    {
        $this->amphora[] = $amphora;
    }

    public function listCargo(): void
    {
        if (count($this->amphora) > 0) {

            $countAmphora = count($this->amphora);
            $totalCapacity = 0;
            foreach ($this->amphora as $amphora) {
                $totalCapacity += $amphora->getCapacity();
            }
            echo "There are $countAmphora amphoras loaded into this boat!" . PHP_EOL;
            echo "The total capacity of the loaded amphoras is $totalCapacity" . PHP_EOL;

        } else
            echo "There are no amphoras loaded into this boat!" . PHP_EOL;
    }

}