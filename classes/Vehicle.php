<?php

class Vehicle
{
  use Car, Ship {
    Car::getColor insteadof Ship;
    Ship::getColor as shipGetColor;
  }

  public function __toString()
  {
    return 'VehicleToString';
  }
}
