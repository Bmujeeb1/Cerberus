<?php
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'mbel');
define('DB_PASSWORD', '1234');
define('DB_NAME', 'cerberus');

// CREATE CONNECION
$conn = new mysqli(DB_HOSTNAME,  DB_USERNAME, DB_PASSWORD, DB_NAME);

// VALIDATE CONNECTION
if($conn->connect_error){
    die('Connection Failed' . $conn->connect_error);
}
?>