<?php

namespace Ablashimov\Container;


class Worker
{
    protected $name;
    protected $tableNum;
    /**
     * @var Workshop
     */
    protected $workshop;

    public function __construct(string $name,int $tableNum)
    {
        $this->name = $name;
        $this->tableNum = $tableNum;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getTableNum(): int
    {
        return $this->tableNum;
    }

    /**
     * @return Workshop
     */
    public function getWorkshop(): Workshop
    {
        return $this->workshop;
    }

    /**
     * @param Workshop|null $workshop
     * @return Worker
     */
    public function setWorkshop($workshop): Worker
    {
        $this->workshop = $workshop;
        return $this;
    }


}