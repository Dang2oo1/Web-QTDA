<?php
$conn = new mysqli('localhost','root','','feelingtea');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  ?>