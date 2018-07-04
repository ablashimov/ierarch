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
        $name = 'Efimov';

        $president = new Plant();
        $president->setPresident($name);

        $this->assertSame($name, $president->getPresidentName());
    }

    public function test_add_workshop()
    {
        $plant = new Plant();
        $workshop = new Workshop('cmo',123);

        $this->assertCount(0, $plant->getWorkshops());

        $plant->addWorkshop($workshop);
        $this->assertCount(1, $plant->getWorkshops());
    }

    public function test_remove_workshop()
    {
        $plant = new Plant();
        $workshop = new Workshop('cmo',123);

        $this->assertCount(0, $plant->getWorkshops());

        $plant->addWorkshop($workshop);
        $this->assertCount(1, $plant->getWorkshops());

        $plant->removeWorkshop($workshop);
        $this->assertCount(0, $plant->getWorkshops());
    }

}