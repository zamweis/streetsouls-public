<?php
$hostname = "mariadb";
$username = "root";
$dbname = "streetsouls";

// Create connection

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
