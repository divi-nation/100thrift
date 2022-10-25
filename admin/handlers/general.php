<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//database connection

$conn = new mysqli('localhost', 'root', '', '100thrift');

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}