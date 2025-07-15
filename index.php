<?php

//The class PHP file is required for the instantiation
require "classes/Amphora.php";
require "classes/Book.php";
require "classes/Counter.php";
require "classes/Boat.php";

//We instantiate an object with "new" and we fill its properties from the constructor defined in the class file
$amphora = new Amphora("My Amphora", 100);

echo "Filling the amphora...!" . PHP_EOL;
$amphora->fill(50);
echo "The amphora is filled with {$amphora->getFilling()}" . PHP_EOL;

echo "Emptying the amphora..." . PHP_EOL;
$amphora->empty(30);
echo "The amphora is now filled with {$amphora->getFilling()}" . PHP_EOL;
echo "The remaining capacity of the amphora is {$amphora->getRemainingCapacity()}" . PHP_EOL;


//Instantiating a book object
$book = new Book("The Hobbit", "Zaher ABBAS", 300);

echo $book->getSummary() . PHP_EOL;

$book->setTitle("The Hobbit 2");

echo "J'ai change le nom du livre book au {$book->getTitle()}" . PHP_EOL;

//Instantiating a counter object
$counter = new Counter();
$counter->increment();
$counter->increment();
echo $counter->getValue() . PHP_EOL;

$anotherAmphora = new Amphora("My Amphora 2", 100);
$boat = new Boat("My Boat", 100);
$boat->load($amphora);
$boat->load($anotherAmphora);
$boat->listCargo();
