<?php
$dataSourceName = "mysql:host=localhost;port=3306;dbname=iurea";
$username = "iurea";
$password = "f4HVDeqB";
$conn = null;
// connect to database with PDO
$conn = new PDO($dataSourceName, $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);