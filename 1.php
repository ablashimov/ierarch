<?php

use Ablashimov\Container\Worker;
use Ablashimov\Container\Workshop;

require_once __DIR__ . '/vendor/autoload.php';

$worker = new Worker('worker', 1);
$chief = new \Ablashimov\Container\Chief('chief', 2);
$workshop = new Workshop('workshop','code');
$workshop->hireChief($chief);
s($worker, $chief, $workshop);
$workshop->dismissChief();
s($chief, $workshop);
try {
    $chief->hireWorker($worker);
}catch (\Exception $exception){
    echo 'asdasdasd';
}


//$workshop->dismissWorker($worker);