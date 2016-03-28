<?php 
include 'connection.php';

$object = Connection::getInstance();

$object1 = Connection::getInstance();

$object2 = Connection::getInstance();

var_dump($object);
var_dump($object1);
var_dump($object2);