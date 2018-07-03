<?php

namespace Ablashimov\Container;


use Webmozart\Assert\Assert;

class Zavod
{
    protected $president;
    protected $director;
    protected $workshops = [];


    public function setPresident(string $president)
    {
        $this->president = $president;
        return $this;
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
        Assert::keyNotExists($this->workshops, $workshop->getCode(), 'Цех с таким кодом уже есть ');
        $this->workshops[$workshop->getCode()] = $workshop;
        return $this;
    }


    public function removeWorkshop(Workshop $workshop)
    {
        Assert::keyExists($this->workshops,$workshop->getCode(),'цех с таким кодом не найден');
        unset($this->workshops[$workshop->getCode()]);
        return $this;
    }
}