<?php
require_once (__DIR__ ."/../vendor/autoload.php");

/*$m = new Mikolka\Comp\Mail\MyMail();
$m->testMail();*/

\Mikolka\Model\Entity::helloWorld();

\Mikolka\Controller\EntityController::helloWorld();
