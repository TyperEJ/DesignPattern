<?php
require __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Patterns\Builder\TruckBuilder;
use Patterns\Builder\Director;
use Patterns\Builder\Parts\Truck;
use Patterns\Builder\CarBuilder;
use Patterns\Builder\Parts\Car;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}