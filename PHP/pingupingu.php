<?php

session_start();

// Demand a SESSION
if ( ! isset($_SESSION['account']) ) {
    die('SESSION NOT FOUND: ACCESS DENIED<br/><br/>Please <a href="login.php">log in</a> to access this page!');
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Philip Lee Hann Yung - Automobiles Database</title>
<?php require_once "bootstrap.php"; ?>
<style>td, th {padding:5px}</style>
</head>
<body>
<div class='container'>
<h1>Welcome to Automobiles Database</h1>
<?php // Do not put any HTML above this line

if ( ! isset($_SESSION['account']) ) {
    echo ("<p><a href='login.php'>Please log in</a></p><p>Attempt to <a href='add.php'>add data</a> without logging in</p>");
}

else {
	require_once "pdo.php";
	
	if ( isset($_SESSION['success']) ) {
		echo('<p style="color: green;">'.htmlentities($_SESSION['success'])."</p>\n");
		unset($_SESSION['success']);
	}
	
	if ( isset($_SESSION['error']) ) {
		echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
		unset($_SESSION['error']);
	}
	
	
	$stmt = $pdo->query("SELECT autos_id, make, model, year, mileage FROM automobiles ORDER BY make");
	if ( $stmt->rowCount() === 0 ) {
		echo ("<p>No rows found</p>");
	} else {
		echo("<table border='1'><tr><th>Make</th><th>Model</th><th>Year</th><th>Mileage</th><th>Action</th></tr>");
		while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
			echo "<tr><td>";
			echo(htmlentities($row['make']));
			echo("</td><td>");
			echo(htmlentities($row['model']));
			echo("</td><td>");
			echo(htmlentities($row['year']));
			echo("</td><td>");
			echo(htmlentities($row['mileage']));
			echo("</td><td>");
			echo('<a href="edit.php?autos_id='.$row['autos_id'].'">Edit</a> / ');
			echo('<a href="delete.php?autos_id='.$row['autos_id'].'">Delete</a>');
			echo("</td></tr>");
		}
		echo("</table><br/>");
	}
	echo ("<p><a href='add.php'>Add New Entry</a></p><p><a href='logout.php'>Logout</a></p>");
}
?>
</div>
</body>