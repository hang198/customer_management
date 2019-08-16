<?php
$connection = new PDO("mysql:host=localhost;dbname=customer_management", "root", "123456@Abc");
$id = 3;
$sql = "SELECT * FROM customers WHERE id = ?";
$statement = $connection->prepare($sql);
$statement->bindParam(1, $id);
$statement->execute();
$row = $statement->fetch();
var_dump($row);
?>