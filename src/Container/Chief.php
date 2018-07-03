<?php

namespace Ablashimov\Container;


class Chief extends Worker
{
    public function hireWorker(Worker $worker)
    {
        $this->workshop->addWorker($worker);
        return $this;
   }

    public function dismissWorker(Worker $worker)
    {
        $this->workshop->removeWorker($worker);
        return $this;
   }

}