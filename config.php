<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$db = "ecommerce";

$conn = mysqli_connect("$host", "$username", "$password", "$db");
