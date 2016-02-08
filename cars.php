<?php
class Car
{
    public $make_model;
    public $price;
    public $miles;
}

$jeep = new Car();
$jeep->make_model = "2013 Jeep Grand Cherokee";
$jeep->price = 15675;
$jeep->miles = 25000;

$toyota = new Car();
$toyota->make_model = "2003 Toyota Avalon";
$toyota->price = 4356;
$toyota->miles = 188888;

$aston = new Car();
$aston->make_model = "2015 Aston Martin Vanquish";
$aston->price = 114987;
$aston->miles = 2035;

$tesla = new Car();
$tesla->make_model = "2016 Tesla Model X";
$tesla->price = 120000;
$tesla->miles = 15;

$cars = array($jeep, $toyota, $aston, $tesla);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->price < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
}


?>
