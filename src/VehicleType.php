<?php
namespace Src;

class VehicleType {
    private string $typeName;
    private float $speedPerHour;
    private float $startUpTimeInHour;

    public function __construct(string $typeName = '', float $speedPerHour = 0.0, float $startUpTimeInHour = 0.0)
    {
        $this->typeName = $typeName;
        $this->speedPerHour = $speedPerHour;
        $this->startUpTimeInHour = $startUpTimeInHour;
    }

    public function setTypeName(string $typeName)
    {
       $this->typeName = $typeName;
    }

    public function setSpeedPerHour(string $speedPerHour)
    {
       $this->speedPerHour = $speedPerHour;
    }

    public function setStartUpTimeInHour(string $startUpTimeInHour)
    {
       $this->startUpTimeInHour = $startUpTimeInHour;
    }


    public function getTypeName()
    {
       return $this->typeName;
    }

    public function getSpeedPerHour()
    {
       return $this->speedPerHour;
    }

    public function getStartUpTimeInHour()
    {
      return  $this->startUpTimeInHour;
    }


    public function timeDurationToReachOut(float $distanceInKm): float
    {
        if($this->speedPerHour)
        {
            return $distanceInKm/$this->speedPerHour + $this->startUpTimeInHour;
        }
        return INF;
    }
}