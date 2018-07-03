<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Ablashimov\Factory\Chief;
use Ablashimov\Factory\Worker;

class ChiefTest extends TestCase
{
    /** @test */
    public function test_chief_worker()
    {
        $chief = new Chief('moroz',777);
        $worker = new Worker('kayn',1);

        $this->assertCount(0, $chief->getWorkers());

        $chief->addWorker($worker);
        $this->assertCount(1, $chief->getWorkers());

        $chief->removeWorker($worker);
        $this->assertCount(0, $chief->getWorkers());

    }

}