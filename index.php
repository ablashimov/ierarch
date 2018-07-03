<?php

use Ablashimov\Container\Worker;
use Ablashimov\Container\Workshop;
use Ablashimov\Container\Zavod;
use Ablashimov\Container\Chief;

require_once __DIR__ . '/vendor/autoload.php';

$plant = new Zavod();
$plant->setPresident('Efimov');
$plant->hireDirector('Selytin');
$worker = new Worker('kayn', 1);
$worker->setWorkshop('cmo');
$chief = new Chief('moroz', 2);
$workshop = new Workshop('cmo','666');
$workshop->hireChief($chief);
$workshop->addWorker($worker,$worker2);
var_dump($worker, $chief, $workshop);
//$workshop->dismissChief();
//var_dump($chief, $workshop);

