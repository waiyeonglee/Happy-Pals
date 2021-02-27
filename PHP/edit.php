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

// Check to see if we have some POST data, if we do process it
if ( isset($_POST['year']) && isset($_POST['mileage']) && isset($_POST['make']) && isset($_POST['model']) ) {
	if ( strlen($_POST['year']) < 1 || strlen($_POST['mileage']) < 1 || strlen($_POST['make']) < 1 || strlen($_POST['model']) < 1 ) {
		$_SESSION['failure'] = "All fields are required";
        header('Location: edit.php?autos_id='.$_REQUEST['autos_id']);
        return;
	} elseif ( !is_numeric($_POST['mileage']) ) {
		$_SESSION['failure'] = "Mileage must be an integer";
		header('Location: edit.php?autos_id='.$_REQUEST['autos_id']);
		return;
	} elseif ( !is_numeric($_POST['year']) ) {
		$_SESSION['failure'] = "Year must be an integer";
		header('Location: edit.php?autos_id='.$_REQUEST['autos_id']);
		return;
	} else {
		$_SESSION['success'] = "Record edited";
		$stmt = $pdo->prepare('UPDATE automobiles SET make = :mk, model = :md, year = :yr, mileage = :mi WHERE autos_id = :au');
		$stmt->execute(array(
			':mk' => $_POST['make'],
			':md' => $_POST['model'],
			':yr' => $_POST['year'],
			':mi' => $_POST['mileage'],
			':au' => $_POST['autos_id'])
		);
		header('Location: index.php');
		return;
	}
}

$stmt = $pdo->prepare("SELECT * FROM automobiles where autos_id = :xyz");
$stmt->execute(array(":xyz" => $_GET['autos_id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for autos_id';
    header( 'Location: index.php' ) ;
    return;
}

$mk = htmlentities($row['make']);
$md = htmlentities($row['model']);
$yr = htmlentities($row['year']);
$mi = htmlentities($row['mileage']);
$autos_id = $row['autos_id'];

?>
<!DOCTYPE html>
<html>
<head>
<title>Philip Lee Hann Yung's Automobile Tracker</title>
</head>
<body>
<div class="container">
<h1>Editing Automobile</h1>
<?php
if ( isset($_SESSION['failure']) ) {
    echo('<p style="color: red;">'.htmlentities($_SESSION['failure'])."</p>\n");
	unset($_SESSION['failure']);
}
?>
<form method="post">
<p>Make:
<input type="text" name="make" size="60" value="<?= $mk ?>"/></p>
<p>Model:
<input type="text" name="model" size="60"value="<?= $md ?>"/></p>
<p>Year:
<input type="text" name="year" value="<?= $yr ?>"/></p>
<p>Mileage:
<input type="text" name="mileage" value="<?= $mi ?>"/></p>
<input type="hidden" name="autos_id" value="<?= $autos_id ?>">
<input type="submit" value="Save">
<input type="submit" name="cancel" value="Cancel">
</form>
</div>
</html>