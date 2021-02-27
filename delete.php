<?php

session_start();

// Demand a SESSION
if ( ! isset($_SESSION['account']) ) {
    die('ACCESS DENIED');
}

require_once "bootstrap.php"; require_once "pdo.php";

if ( isset($_POST['cancel']) ) {
    header('Location: index.php');
    return;
}

if ( isset($_POST['delete']) && isset($_POST['autos_id']) ) {
    $stmt = $pdo->prepare("DELETE FROM automobiles WHERE autos_id = :au");
    $stmt->execute(array(':au' => $_POST['autos_id']));
    $_SESSION['success'] = 'Record deleted';
    header( 'Location: index.php' ) ;
    return;
}

$stmt = $pdo->prepare("SELECT * FROM automobiles where autos_id = :xyz");
$stmt->execute(array(":xyz" => $_GET['autos_id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for autos_id';
    header( 'Location: index.php' ) ;
    return;
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Philip Lee Hann Yung's Automobile Tracker</title>
</head>
<body>
<div class="container">
<p>Confirm: Deleting <i><?= htmlentities($row['make']) ?></i></p>
<form method="post">
<input type="hidden" name="autos_id" value="<?= $row['autos_id'] ?>">
<input type="submit" name="delete" value="Delete">
<input type="submit" name="cancel" value="Cancel">
</form>
</div>
</html>