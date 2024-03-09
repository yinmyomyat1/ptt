<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epda_dbms";

try {
  $db = new PDO("mysql:host=$servername;dbname=epda_dbms", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>