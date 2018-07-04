<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Ablashimov\Factory\Chief;
use Ablashimov\Factory\Worker;
use Ablashimov\Factory\Workshop;

class ChiefTest extends TestCase
{
    /** @test */
    public function test_chief_hire_worker()
    {
        $chief = new Chief('moroz',777);
        $worker = new Worker('kayn',1);
        $workshop = new Workshop('moc',321);

        $workshop->hireChief($chief);

        $this->assertCount(0, $workshop->getWorkers());

        $chief->hireWorker($worker);
        $this->assertCount(1, $workshop->getWorkers());

    }

    public function test_remove_chief_worker()
    {
       $chief = new Chief('moroz',777);
        $worker = new Worker('kayn',1);
        $workshop = new Workshop('moc',321);

        $workshop->hireChief($chief);

        $this->assertCount(0, $workshop->getWorkers());

        $chief->hireWorker($worker);
        $this->assertCount(1, $workshop->getWorkers());

        $chief->dismissWorker($worker);
        $this->assertCount(0, $workshop->getWorkers());

    }

}