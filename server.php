<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "register_db";

//Create Connection

$connect = mysqli_connect($severname, $username, $password, $dbname);

//Check connection
if (!$connect) {
    die("Connection failed" . mysqli_connect_error());
}
