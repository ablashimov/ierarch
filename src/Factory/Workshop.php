<?php

namespace Ablashimov\Factory;


class Workshop
{
    /** @var int*/
    protected $code;

    /** @var string */
    protected $name;

    /**@var Chief*/
    protected $chief;

    /** @var Worker[] */
    protected $workers = [];


    public function __construct(string $name, string $code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getChief()
    {
        return $this->chief;
    }

    public function hireChief(Chief $chief)
    {
        $this->chief = $chief;
        $chief->setWorkshop($this);

        return $this;
    }

    public function dismissChief()
    {
        $this->chief->setWorkshop(null);
        $this->chief = null;

        return $this;
    }

    public function addWorker(Worker $worker)
    {
        $this->workers[$worker->getTableNumber()]=$worker;
        $worker->setWorkshop($this);

        return $this;
    }

    public function removeWorker(Worker $worker)
    {
        $worker->setWorkshop(null);
        unset($this->workers[$worker->getTableNumber()]);

    }
    public function getWorkers(): array
    {
        return $this->workers;
    }
 
}