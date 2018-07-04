<?php

namespace Ablashimov\Factory;


class Chief extends Worker
{

    public function hireWorker(Worker $worker)
    {
        $worker->setWorkshop($this->getWorkshop());
        $this->getWorkshop()->addWorker($worker);

        return $this;
   }

    public function dismissWorker(Worker $worker)
    {
        $this->workshop->removeWorker($worker);

        return $this;
   }
}