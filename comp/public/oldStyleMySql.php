<?php

use Mikolka\Config\Db;

require_once(__DIR__ . "/../vendor/autoload.php");

$mysqli = new mysqli(Db::$hostName, Db::$userName, Db::$password, Db::$database);

//CREATE
$sqlStr = 'INSERT INTO posts (title, body) VALUES ("title", "body")';
$result = $mysqli->query($sqlStr);
var_dump($result);

//READ
$sqlStr = 'SELECT * FROM posts';
$result = $mysqli->query($sqlStr);
var_dump($result);

//UPDATE
$sqlStr = 'UPDATE posts SET title = "New Title" WHERE id = "1"';
$result = $mysqli->query($sqlStr);
var_dump($result);

//DELETE
$sqlStr = 'DELETE FROM posts WHERE id = "10"';
$result = $mysqli->query($sqlStr);
var_dump($result);
