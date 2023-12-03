<?php
 require "database.php";
 $stmt = $pdo->prepare("SELECT * FROM user");
 $stmt->execute();
 $users = $stmt->fetchObject();
var_dump($users);