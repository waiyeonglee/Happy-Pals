<?php
$dsn = getenv('CLOUDSQL_DSN');
$user = getenv('CLOUDSQL_USER');
$password = getenv('CLOUDSQL_PASSWORD');
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>