<?php

use Ablashimov\Factory\Worker;
use Ablashimov\Factory\Workshop;
use Ablashimov\Factory\Plant;
use Ablashimov\Factory\Chief;

require_once __DIR__ . '/vendor/autoload.php';

$plant = new Plant();
$plant->setPresident('Efimov');
$plant->hireDirector('Selytin');
$worker = new Worker('kayn', 1);
$worker->setWorkshop('cmo');
$chief = new Chief('moroz', 2);
$workshop = new Workshop('cmo','666');
$workshop->hireChief($chief);
$workshop->addWorker($worker,$worker2);
var_dump($worker);
//$workshop->dismissChief();
//var_dump($chief, $workshop);

