<?php
include_once("./vendor/autoload.php");

 use Src\ArrayTransform;
 use Src\VehicleType;

 echo '<h3>#1 Refactor The Code</h3>';
 echo '<pre>';
 echo '<b>Implementation</b>: Class code is in the file `./src/VehicleType.php`<hr/>';
 echo '
    use Src\VehicleType;
    $vehicheTypes = [
                    new VehicleType("sport-car", 150),
                    new VehicleType("truck", 60),
                    new VehicleType("bike", 100),
                    new VehicleType("boat", 50, 0.25),
    ];
    $distance = 350;
    foreach($vehicheTypes as $key => $vehicleType) {
        echo "<b>",$vehicleType->getTypeName(), "</b>", " takes <b>" ,$vehicleType->timeDurationToReachOut($distance),  "</b> hour to reachout the destination </br>";
    }';
echo'<br><br> Output <hr/>';

$vehicheTypes = [
                    new VehicleType("sport-car", 150),
                    new VehicleType("truck", 60),
                    new VehicleType("bike", 100),
                    new VehicleType("boat", 50, 0.25),
];
$distance = 350;

foreach($vehicheTypes as $key => $vehicleType) {
    echo "<b>",$vehicleType->getTypeName(), "</b>", " takes <b>" ,$vehicleType->timeDurationToReachOut($distance),  "</b> hour to reachout the destination </br>";
}

echo '</pre>';

 

 echo '<h3>#2 Logic Test</h3>';
 echo '<pre>';
 echo '<b>Implementation</b>: Class code is in the file `./src/ArrayTransform.php`<hr/>';
 echo '
    $transformer = new ArrayTransform();
    $transformer->setArray([3,5,6,0,7,0,1]);
    print_r($transformer->transform());
 ';
 
 $transformer = new ArrayTransform();
 $transformer->setArray([3,5,6,0,7,0,1]);
 echo '<br/><br/>Input:';
 print_r([3,5,6,0,7,0,1]);
 echo "Output: ";
 print_r($transformer->transform());
 echo '</pre>';
