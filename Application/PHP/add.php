<?php

session_start();

// Demand a SESSION
if ( ! isset($_SESSION['account']) ) {
    die('ACCESS DENIED - PLEASE LOG IN!<br/><br/>Click <a href="./">here</a> for the main page');
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
        header("Location: add.php");
        return;
	} elseif ( !is_numeric($_POST['mileage']) ) {
		$_SESSION['failure'] = "Mileage must be an integer";
		header('Location: add.php');
		return;
	} elseif ( !is_numeric($_POST['year']) ) {
		$_SESSION['failure'] = "Year must be an integer";
		header('Location: add.php');
		return;
	} else {
		$_SESSION['success'] = "Record added";
		$stmt = $pdo->prepare('INSERT INTO automobiles (make, model, year, mileage) VALUES ( :mk, :md, :yr, :mi)');
		$stmt->execute(array(
			':mk' => $_POST['make'],
			':md' => $_POST['model'],
			':yr' => $_POST['year'],
			':mi' => $_POST['mileage'])
		);
		header('Location: index.php');
		return;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Philip Lee Hann Yung's Automobile Tracker</title>
</head>
<body>
<div class="container">
<h1>Tracking Autos for <?echo $_SESSION['account']?></h1>
<?php
if ( isset($_SESSION['failure']) ) {
    echo('<p style="color: red;">'.htmlentities($_SESSION['failure'])."</p>\n");
	unset($_SESSION['failure']);
}
?>
<form method="post">
<p>Make:
<input type="text" name="make" size="60"/></p>
<p>Model:
<input type="text" name="model" size="60"/></p>
<p>Year:
<input type="text" name="year"/></p>
<p>Mileage:
<input type="text" name="mileage"/></p>
<input type="submit" value="Add">
<input type="submit" name="cancel" value="Cancel">
</form>
</div>
</html>