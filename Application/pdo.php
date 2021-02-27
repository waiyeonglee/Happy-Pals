<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=happy_pals', 'philip', 'boop');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>