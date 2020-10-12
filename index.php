<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$deLorean = new Car("grey", 2, "plutonium");
echo $deLorean->dump ();
//moving Car
echo $deLorean->start ();
echo '<br> Niveau de plutonium : ' . $deLorean->getEnergyLevel () . 'GW' . '<br>';
echo $deLorean->forward();
echo '<br> Vitesse de la voiture : ' . $deLorean->getCurrentSpeed() . ' km/h' . '<br>';
echo $deLorean->brake();
echo '<br> Vitesse de la voiture : ' . $deLorean->getCurrentSpeed() . ' km/h' . '<br>';
echo $deLorean->brake();


$bike = new Bicycle();
$bike->setColor ("blue");
$bike->setCurrentSpeed(0);
$bike->dump();

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
