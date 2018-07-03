<?php

namespace Ablashimov\Factory;


class Worker
{
    /** @var string */
    protected $name;

    /** @var int */
    protected $tableNumber;

    /** @var Workshop */
    protected $workshop;

    /** @var $chief */
    protected $chief;

    public function __construct(string $name,int $tableNumber)
    {
        $this->name = $name;
        $this->tableNumber = $tableNumber;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTableNumber(): int
    {
        return $this->tableNumber;
    }

 
    public function getWorkshop(): Workshop
    {
        return $this->workshop;
    }

    public function setWorkshop($workshop): Worker
    {
        $this->workshop = $workshop;

        return $this;
    }

    public function getChief(): Chief
    {
        return $this->chief;
    }

    public function setChief($chief): Worker
    {
        $this->chief = $chief;

        return $this;
    }

}