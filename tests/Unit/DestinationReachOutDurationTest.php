<?php
    use Src\VehicleType;


    class SampleTest extends \PHPUnit\Framework\TestCase {
        private VehicleType $vehicheTypes;

        public function testDurrationToTrue() {
            $reachOutTime = [2.33, 5.83, 3.5, 7.25];
            $vehicheTypes = [
                                new VehicleType('sport-car', 150),
                                new VehicleType('truck', 60),
                                new VehicleType('bike', 100),
                                new VehicleType('boat', 50, 0.25),
            ];
            $distance = 350;
            foreach($vehicheTypes as $key => $vehicleType) {
                $this->assertTrue($reachOutTime[$key] == round($vehicleType->timeDurationToReachOut($distance), 2));
            }
        }

        public function testInfineToTrue()
        {
           $vehicleType =  new VehicleType('sport-car', 0);
           $this->assertTrue(INF == $vehicleType->timeDurationToReachOut(350));
        }
    }