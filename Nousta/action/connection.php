<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "nousta";

$connect = new mysqli($host, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Connection Failed : " . $connect->connect_error);
}