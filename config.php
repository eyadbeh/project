<?php
session_start();
$host = "localhost";
$username = "root";
$password = "123";
$db = "ecommerce";

$conn = mysqli_connect("$host", "$username", "$password", "$db");