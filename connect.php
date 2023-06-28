<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABSE = 'meetease';
$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABSE);
if (!$con) {
   die(mysqli_error("Error"+$con));
} 
?>