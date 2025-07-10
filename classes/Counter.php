<?php

class Counter
{
    //When initialising a property, we don't need to use a constructor for that property
    private int $value = 0;

    public function increment(): void
    {
        $this->value++;
    }

    public function decrement(): void
    {
        if ($this->value > 0)
            $this->value--;

    }

    public function getValue(): int
    {
        return $this->value;
    }

}
