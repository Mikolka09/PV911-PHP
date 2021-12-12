<?php

use Mikolka\Config\Db;

require_once (__DIR__ ."/../vendor/autoload.php");

$mysqli = new mysqli(Db::$hostName, Db::$userName, Db::$password, Db::$database);