<?php
$servername = "localhost";
$username = "admin";
$password = "123nipple";
$dbname = "borderless_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("failed: " . $conn->connect_error);
} else {
    //echo "successfully connected";
}
