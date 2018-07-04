<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Ablashimov\Factory\Workshop;
use Ablashimov\Factory\Chief;
use Ablashimov\Factory\Worker;

class WorkshopTest extends TestCase
{
    /** @test */
    public function test_chief_workshop()
    {
        $workshop = new Workshop('moc',321);
        $chief = new Chief('moroz',777);

        $workshop->hireChief($chief);
        $this->assertSame($chief, $workshop->getChief());
    }

     public function test_dismiss_chief_workshop()
    {
        $workshop = new Workshop('moc',321);
        $chief = new Chief('moroz',777);

        $workshop->hireChief($chief);
        $this->assertSame($chief, $workshop->getChief());

        $workshop->dismissChief($chief);
        $this->assertNull($workshop->getChief());
    }

    public function test_worker_workshop()
    {
        $workshop = new Workshop('moc',321);
        $worker = new Worker('kayn',1);

        $this->assertCount(0, $workshop->getWorkers());

        $workshop->addWorker($worker);
        $this->assertCount(1, $workshop->getWorkers());
    }

    public function test_remove_worker_workshop()
    {
        $workshop = new Workshop('moc',321);
        $worker = new Worker('kayn',1);

        $this->assertCount(0, $workshop->getWorkers());

        $workshop->addWorker($worker);
        $this->assertCount(1, $workshop->getWorkers());

        $workshop->removeWorker($worker);
        $this->assertCount(0, $workshop->getWorkers());
    }

}