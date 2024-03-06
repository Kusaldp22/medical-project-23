<?php
$json_path = "../config/credentials.json";
require "../db.php";
require "functions.inc.php";

$username = $_POST["username"];
$password = $_POST["password"];

if (isset($_POST["user_submission"])) {
    check_login($username, $password); 
}