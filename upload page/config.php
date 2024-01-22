<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "ecommerce";

$conn = mysqli_connect("$servername", "$username", "$password", "$db");

$base_url = "http://localhost/ecommerce/upload page/"; // Website url