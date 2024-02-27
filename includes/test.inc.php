<?php

$json_path = "../config/credentials.json";
require "../db.php";
require "./functions.inc.php";

 
$info = get_UID();
echo "data: " . $info;