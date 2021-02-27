<?php // Do not put any HTML above this line

session_start();

if ( isset($_SESSION['account']) ) {  // Auto login if session detected
    header('Location: main.php');
	return;
}

require_once "pdo.php"; 
$salt = 'pingu12*_';

// Check to see if we have some POST data, if we do process it
if ( isset($_POST['username']) && isset($_POST['password']) ) {
	unset($_SESSION['account']);
    if ( strlen($_POST['username']) < 1 || strlen($_POST['password']) < 1 ) {
        $_SESSION['error'] = "Username and password are required";
		header( 'Location: login.php' ) ;
		return;	
    } else {
		$hp_current = hash('md5', $salt.$_POST['password']); // Hashed password
		$hu_current = hash('md5', $salt.$_POST['username']); // Hashed username
		$stmt = $pdo->prepare("SELECT hashed_password FROM account_data where hashed_username = :xyz");
		$stmt->execute(array(":xyz" => $hu_current));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if ( $row === false ) {   // New user
			$_SESSION['account'] = $_POST['username'];
			error_log("New account created, success ".$hu_current);
			$stmt = $pdo->prepare('INSERT INTO account_data (hashed_username, hashed_password) VALUES (:hu, :hp)');
			$stmt->execute(array(
				':hu' => $hu_current,
				':hp' => $hp_current)
			);
			header('Location: main.php');
			return;
		} else {
			$hp = htmlentities($row['hashed_password']);
			if ( $hp_current == $hp ) {
				$_SESSION['account'] = $_POST['username'];
				error_log("Login success ".$hu_current);
				header( 'Location: main.php' );
				return;
			} else {
				$_SESSION['error'] = "Incorrect password entered / Username has been taken";
				error_log("Login fail ".$hu_current." ".$check);
				header( 'Location: login.php' ) ;
				return;
			} 
		}
    }
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Please Log In / Sign Up">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
	<title>Happy Pals - Log In / Sign Up Page</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
	<link rel="stylesheet" href="Happy-Pals.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.7.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/default-logo.png"
}</script>
    <meta property="og:title" content="Log In">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-d1b2"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Happy-Pals.html" style="padding: 10px 20px;">Happy Pals</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="login.php" style="padding: 10px 20px;">Log In / Sign Up</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Happy-Pals.html" style="padding: 10px 20px;">Happy Pals</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.php" style="padding: 10px 20px;">Log In / Sign Up</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" id="sec-ab82" data-image-width="1280" data-image-height="853">
      <div class="u-clearfix u-sheet u-sheet-1">
	  <br/><br/><br/><br/><br/><br/>
        <h1>Please Log In / Sign Up</h1><br/>
		  <center><form method="POST"><table border=0 style="text-align:left; font-size:120%">
			<tr><td><label for="name">Username</label>&nbsp;&nbsp;&nbsp;</td>
			<td><input type="text" name="username" id="username" style="color:black;"></td></tr>
			<tr><td><label for="id_1723">Password</label></td>
			<td><input type="password" name="password" id="password" style="color:black;"></td></tr></table>
			<br>
			<br>
			<?php
			if ( isset($_SESSION['error']) ) {
				echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
				unset($_SESSION['error']);
			}
			?>
			<button type="submit" formmethod="post" class="u-border-2 u-border-hover-palette-1-base u-border-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-none u-radius-50">Log In / Create New Account</button>
		  </form></center>
      </div>
    </section>
    
    <section class="u-backlink u-clearfix u-grey-80">
		<p class="u-align-center u-small-text u-text u-text-variant u-text-1">© Happy Pals 2021</p> | 
      <a class="u-link" href="https://nicepage.com/html-templates" target="_blank">
        <span>HTML Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/website-builder" target="_blank">
        <span>Free Website Builder</span>
      </a>
    </section>
  </body>
</html>