<?php

//Your Mysql Config
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pp";

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname,3307);

//Check Connection
if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
