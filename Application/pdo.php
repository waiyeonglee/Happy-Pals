<?php
$dsn = getenv('CLOUDSQL_DSN');
$user = getenv('CLOUDSQL_USER');
$password = getenv('CLOUDSQL_PASSWORD');
//$pdo = new PDO($dsn, $user, $password);
$pdo = new PDO("mysql:host=sql12.freemysqlhosting.net; port=3306; dbname=sql12395648;unix_socket=/cloudsql/happy-pals:asia-southeast2:happy-pals-my-sql", 'sql12395648', 'dWTrM7792J');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>