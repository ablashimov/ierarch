<?php

namespace Ablashimov\Factory;


class Plant
{
    /** @var string*/
    protected $president;

    /** @var string */
    protected $director;

    /** @var array*/
    protected $workshops = [];


    public function setPresident(string $president)
    {
        $this->president = $president;
        
        return $this;
    }

    public function getPresidentName(): string
    {
        return $this->president;
    }

    public function hireDirector(string $director)
    {
        $this->director = $director;

        return $this;
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