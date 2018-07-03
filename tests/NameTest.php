<?php

namespace Tests;

use Ablashimov\Container\Zavod;
use PHPUnit\Framework\TestCase;

class Zavod extends TestCase
{
    /** @test */
    function test_president_name()
    {
        $name = 'EMSS';

        $president = new Zavod();
        $president->setPresident($name);

        $this->assertSame($name, $plant->getName());
    }
}