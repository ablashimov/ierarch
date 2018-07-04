<?php

namespace Tests;

use Ablashimov\Factory\Plant;
use PHPUnit\Framework\TestCase;
use Ablashimov\Factory\Workshop;

class PlantTest extends TestCase
{
    /** @test */
    public function test_president_name()
    {
        $presidentName = 'Efimov';
        $directorName = 'selytin';
        $plant = new Plant($presidentName, $directorName);

        $this->assertSame($presidentName, $plant->getPresident());

        $this->assertSame($directorName, $plant->getDirector());
    }

    public function test_add_workshop()
    {
        $presidentName = 'Efimov';
        $directorName = 'selytin';
        $plant = new Plant($presidentName, $directorName);
        $workshop = new Workshop('cmo',123);

        $this->assertCount(0, $plant->getWorkshops());

        $plant->addWorkshop($workshop);
        $this->assertCount(1, $plant->getWorkshops());
    }

    public function test_remove_workshop()
    {
        $presidentName = 'Efimov';
        $directorName = 'selytin';
        $plant = new Plant($presidentName, $directorName);
        $workshop = new Workshop('cmo',123);

        $this->assertCount(0, $plant->getWorkshops());

        $plant->addWorkshop($workshop);
        $this->assertCount(1, $plant->getWorkshops());

        $plant->removeWorkshop($workshop);
        $this->assertCount(0, $plant->getWorkshops());
    }

}