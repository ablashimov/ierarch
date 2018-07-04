<?php

namespace Ablashimov\Factory;


class Plant
{
    /** @var string */
    protected $president;

    /** @var string */
    protected $director;

    /** @var array */
    protected $workshops = [];


    public function __construct(string $president, string $director)
    {
        $this->president = $president;
        $this->director = $director;
    }

    public function getPresident(): string
    {
        return $this->president;
    }

    public function getDirector(): string
    {
        return $this->director;        
    }

    public function dismissDirector()
    {
        $this->director = null;

        return $this;
    }

    public function addWorkshop(Workshop $workshop)
    {
        $this->workshops[$workshop->getCode()] = $workshop;

        return $this;
    }


    public function removeWorkshop(Workshop $workshop)
    {
        unset($this->workshops[$workshop->getCode()]);

        return $this;
    }

    public function getWorkshops(): array
    {
        return $this->workshops;
    }
}