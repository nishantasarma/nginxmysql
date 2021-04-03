<?php
$servername = "localhost";


try {
  $conn = new PDO("mysql:host=$servername;dbname=mysql", "root", "helloworld");

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>