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
    <meta name="keywords" content="Here's something for your soul">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Imagery</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Imagery.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.7.2, nicepage.com">
    
    
    
    
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alex+Brush:400">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/default-logo.png"
}</script>
    <meta property="og:title" content="Imagery">
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
    <section class="u-align-center u-clearfix u-palette-4-light-3 u-section-1" id="sec-74c7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-text u-text-1">Here's something for your soul</h1>
        <div class="u-align-center u-carousel u-gallery u-layout-carousel u-lightbox u-no-transition u-show-text-none u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-c442">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-c442" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-c442" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-c442" data-u-slide-to="2" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-c442" data-u-slide-to="3" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-c442" data-u-slide-to="4" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-border-2 u-border-palette-4-light-1 u-carousel-item u-gallery-item u-shape-rectangle u-carousel-item-1">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/0846a7e5bd71c6b7348560bd9f7e9c0f-700.jpg">
              </div>
              <div class="u-over-slide u-over-slide-1">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-border-2 u-border-palette-4-light-1 u-carousel-item u-gallery-item u-shape-rectangle u-carousel-item-2">
              <div class="u-back-slide" data-image-width="1600" data-image-height="1095">
                <img class="u-back-image u-expanded" src="images/6514.jpg">
              </div>
              <div class="u-over-slide u-over-slide-2">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-border-2 u-border-palette-4-light-1 u-carousel-item u-gallery-item u-shape-rectangle u-carousel-item-3" data-image-width="450" data-image-height="311">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/1154824-bigthumbnail.jpg">
              </div>
              <div class="u-over-slide u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-border-2 u-border-palette-4-light-1 u-carousel-item u-gallery-item u-shape-rectangle u-carousel-item-4" data-image-width="1300" data-image-height="557">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/137770873-beautiful-magical-scenery-with-a-waterfall-kirkjufell-near-the-volcano-in-iceland-at-sunset-exotic-c.jpg">
              </div>
              <div class="u-over-slide u-over-slide-4">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-border-2 u-border-palette-4-light-1 u-carousel-item u-gallery-item u-shape-rectangle u-carousel-item-5" data-image-width="2040" data-image-height="1360">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/engadin_giangiovanoli.jpg">
              </div>
              <div class="u-over-slide u-over-slide-5">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-c442" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-c442" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-a68e"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-small-text u-text u-text-variant u-text-1">© Happy Pals 2021</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/templates" target="_blank">
        <span>Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>Free WYSIWYG HTML Editor</span>
      </a>. 
    </section>
  </body>
</html>