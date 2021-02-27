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
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Chill Tunes</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Chill-Tunes.css" media="screen">
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
    <meta property="og:title" content="Chill Tunes">
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
    <section class="u-align-left u-clearfix u-image u-section-1" id="sec-4e5d" data-image-width="150" data-image-height="100">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-custom-html u-custom-html-1">
          <h4> Merry Christmas Mr. Lawrence </h4>
          <a id="video1"></a>
          <script> document.getElementById('video1').innerHTML = '<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/238838283&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/anamanaguchi" title="Anamanaguchi" target="_blank" style="color: #cccccc; text-decoration: none;">Anamanaguchi</a> · <a href="https://soundcloud.com/anamanaguchi/merry-christmas-mr-lawrence" title="Merry Christmas Mr. Lawrence" target="_blank" style="color: #cccccc; text-decoration: none;">Merry Christmas Mr. Lawrence</a></div>' </script>
          <h4> Fireworks Festival </h4>
          <a id="video2"></a>
          <script> document.getElementById('video2').innerHTML = '<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/878435929&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/weczjdn7rsto" title="霧ヶ谷 カズト" target="_blank" style="color: #cccccc; text-decoration: none;">霧ヶ谷 カズト</a> · <a href="https://soundcloud.com/weczjdn7rsto/fireworks-festival" title="Fireworks Festival ost Tenki no Ko" target="_blank" style="color: #cccccc; text-decoration: none;">Fireworks Festival ost Tenki no Ko</a></div>' </script>
          <h4> Gracefully </h4>
          <a id="video3"></a>
          <script> document.getElementById('video3').innerHTML = '<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/153718555&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/fengoku" title="Fengoku" target="_blank" style="color: #cccccc; text-decoration: none;">Fengoku</a> · <a href="https://soundcloud.com/fengoku/sao-gracefully-piano" title="Gracefully [Piano Cover] - Sword Art Online (SAO)" target="_blank" style="color: #cccccc; text-decoration: none;">Gracefully [Piano Cover] - Sword Art Online (SAO)</a></div>' </script>
          <h4> Rain </h4>
          <a id="video4"></a>
          <script> document.getElementById('video4').innerHTML = '<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/589164594&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/king-kivo" title="KING KIVO" target="_blank" style="color: #cccccc; text-decoration: none;">KING KIVO</a> · <a href="https://soundcloud.com/king-kivo/fmab_rain-mp3" title="fmab_rain.mp3" target="_blank" style="color: #cccccc; text-decoration: none;">fmab_rain.mp3</a></div>' </script>
          <h4> Path of the Wind </h4>
          <a id="video5"></a>
          <script> document.getElementById('video5').innerHTML = '<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/166319246&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/ryan-linardy" title="Ryan Linardy" target="_blank" style="color: #cccccc; text-decoration: none;">Ryan Linardy</a> · <a href="https://soundcloud.com/ryan-linardy/the-path-of-the-wind-totoro-ost-joe-hisaishipiano-ver" title="The Path Of The Wind (Totoro OST) - Joe Hisaishi(Piano Ver.)" target="_blank" style="color: #cccccc; text-decoration: none;">The Path Of The Wind (Totoro OST) - Joe Hisaishi(Piano Ver.)</a></div>' </script>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-a68e"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-small-text u-text u-text-variant u-text-1">© Happy Pals 2021</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/templates" target="_blank">
        <span>Free Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/" target="_blank">
        <span>Web Design Software</span>
      </a>. 
    </section>
  </body>
</html>