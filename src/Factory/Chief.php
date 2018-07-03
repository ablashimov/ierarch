<?php

namespace Ablashimov\Factory;


class Chief extends Worker
{
    /** @var array*/
    protected $workers=[];

    public function addWorker(Worker $worker)
    {
        $this->workers[$worker->getTableNumber()]=$worker;
        $worker->setChief($this);

        return $this;
    }

    public function removeWorker(Worker $worker)
    {
        $worker->setChief(null);
        unset($this->workers[$worker->getTableNumber()]);
    }

    public function getWorkers(): array
    {
        return $this->workers;
    }

}