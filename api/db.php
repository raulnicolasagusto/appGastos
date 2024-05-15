<?php

$server = "localhost";
$user = "root";
$pass = "";

try {
  $con = new PDO("mysql:host=$server;dbname=appgastos", $user, $pass);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  echo "NO se pudo conectar";
  $con = null;
}


