<?php

session_start();

// Demand a SESSION
if ( ! isset($_SESSION['account']) ) {
    die('SESSION NOT FOUND: ACCESS DENIED<br/><br/>Please <a href="login.php">log in</a> to access this page!');
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Good Ideas">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Main</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Main.css" media="screen">
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
    <meta property="og:title" content="Main">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-d1b2"><div class="u-clearfix u-sheet u-sheet-1">
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
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="main.php" style="padding: 10px 20px;">Main</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="dance.php" style="padding: 10px 20px;">Dance</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="imagery.php" style="padding: 10px 20px;">Imagery</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="chill_tunes.php" style="padding: 10px 20px;">Chill Tunes</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="logout.php" style="padding: 10px 20px;">Log Out</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="main.php" style="padding: 10px 20px;">Main</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="dance.php" style="padding: 10px 20px;">Dance</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="imagery.php" style="padding: 10px 20px;">Imagery</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="chill_tunes.php" style="padding: 10px 20px;">Chill Tunes</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="logout.php" style="padding: 10px 20px;">Log Out</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-video u-video-cover u-section-1" id="carousel_5405">
      <div style="" class="u-background-video u-expanded u-video-cover">
        <div class="embed-responsive embed-responsive-1">
          <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/iia8HIsvqmw?playlist=iia8HIsvqmw&amp;loop=1&amp;mute=1&amp;showinfo=0&amp;controls=0&amp;start=0&amp;autoplay=1" frameborder="0" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="u-expanded u-opacity u-opacity-60 u-palette-2-dark-2 u-shape u-shape-rectangle"></div>
      <h1 class="u-text u-text-body-alt-color u-title u-text-1">Welcome <?echo $_SESSION['account']?></h1>
      <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-2">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
      <a href="#" class="u-btn u-btn-round u-button-style u-radius-50 u-btn-1">Scroll down</a>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-565d">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-1">Redeem your free gift</h2>
        <div class="u-form u-form-1">
          <form action="#" method="POST" class="u-clearfix u-form-horizontal u-form-spacing-15 u-inner-form" style="padding: 15px;" source="custom">
            <div class="u-form-group u-form-name">
              <label for="name-ef64" class="u-form-control-hidden u-label">Name</label>
              <input type="text" placeholder="Name" id="name-ef64" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-ef64" class="u-form-control-hidden u-label">Email</label>
              <input type="email" placeholder="Email" id="email-ef64" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-submit u-button-style">Submit</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">#FormSendSuccess</div>
            <div class="u-form-send-error u-form-send-message">#FormSendError</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-a68e"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-small-text u-text u-text-variant u-text-1">© Happy Pals 2021</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>HTML Website Builder</span>
      </a>. 
    </section>
	<script src="https://cdn.cai.tools.sap/webchat/webchat.js" channelId="77397177-c0d8-4097-96bf-80223cc9e15c" token="a899d0693a1bf324d0cf8df4a4b40352" id="cai-webchat"></script>
  </body>
</html>