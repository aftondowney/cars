<?php
class Car
{
    public $make_model;
    private $price;
    public $miles;

    function __construct($car_model, $cost, $mileage)
    {
      $this->make_model = $car_model;
      $this->price = $cost;
      $this->miles = $mileage;
    }

    function worthBuying($max_price)
    {
        return $this->price < ($max_price);
    }

    function setPrice($new_price)
    {
        $this->price = $new_price;
    }

    function getPrice()
    {
        return $this->price;
    }
}

$jeep = new Car("2013 Jeep Grand Cherokee", 15675, 25000);

$toyota = new Car("2003 Toyota Avalon", 4356, 188888);

$aston = new Car("2015 Aston Martin Vanquish", 114987, 2035);

$tesla = new Car("2016 Tesla Model X", 120000, 15);

$cars = array($jeep, $toyota, $aston, $tesla);

$cars_matching_search = array();
foreach ($cars as $car) {
  $car_price = $car->getPrice();
    if ($car_price < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
              $current_price = $car->getPrice();
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $$current_price </li>";
                    echo "<li> Miles: $car->miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
