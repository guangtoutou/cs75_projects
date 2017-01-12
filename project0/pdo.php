<?php
// PDO
$pdo = new PDO('mysql:host=localhost;dbname=resume', 'developer', 'dev_password');
$statement = $pdo->query("SELECT * FROM bio");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['name']);
?>