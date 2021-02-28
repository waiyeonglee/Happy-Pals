<?php

session_start();

// Demand a SESSION
if ( ! isset($_SESSION['account']) ) {
    die('SESSION NOT FOUND: ACCESS DENIED<br/><br/>Please <a href="login">log in</a> to access this page!');
}

if ( ! isset($_SESSION['all_visited']) ) {
	require_once "pdo.php";
	$stmt = $pdo->prepare('UPDATE account_data SET talk_visited = :visited WHERE user_id = :ui');
	$stmt->execute(array(':visited' => 1, ':ui' => $_SESSION['user_id']));
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="01, 02, 03, 04">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Talk</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Talk.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.7.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html"
}</script>
    <meta property="og:title" content="Talk">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-d1b2"><div class="u-clearfix u-sheet u-sheet-1">
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
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="happy-pals" style="padding: 10px 20px;">Happy Pals</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="dance" style="padding: 10px 20px;">Dance</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="imagery" style="padding: 10px 20px;">Imagery</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="melodies" style="padding: 10px 20px;">Melodies</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="talk" style="padding: 10px 20px;">Talk</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="logout" style="padding: 10px 20px;">Log Out</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="happy-pals" style="padding: 10px 20px;">Happy Pals</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="dance" style="padding: 10px 20px;">Dance</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="imagery" style="padding: 10px 20px;">Imagery</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="melodies" style="padding: 10px 20px;">Melodies</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="talk" style="padding: 10px 20px;">Talk</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="logout" style="padding: 10px 20px;">Log Out</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav><span class="u-icon u-icon-rectangle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 511.997 511.997" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4984"></use></svg><svg class="u-svg-content" id="svg-4984" style="color: rgb(0, 0, 0);"><g><g><g><path d="M510.434,266.914c-7.35-20.195-38.601-26.742-67.027-24.635c-5.223-28.002-14.299-56.088-26.838-81.087     c-1.857-3.702-6.363-5.198-10.067-3.341c-3.702,1.857-5.198,6.364-3.341,10.066c26.72,53.267,37.018,120.914,26.4,168.998     c-0.037,0.149-0.067,0.3-0.094,0.452c-0.741,3.306-1.578,6.523-2.519,9.631c-5.672,18.725-15.005,33.734-28.432,45.747     c-5.46-34.677-15.362-67.262-28.919-94.908c-3.852-7.853-2.246-17.375,3.995-23.691c16.634-16.839,25.474-39.155,24.89-62.839     c-0.544-22.06-9.501-42.903-25.224-58.69c-15.724-15.788-36.528-24.831-58.585-25.463c-19.799-0.563-38.598,5.4-54.37,17.26     c-2.533,1.906-6.073,1.906-8.608-0.001c-15.771-11.858-34.569-17.824-54.37-17.26c-22.057,0.632-42.862,9.675-58.585,25.463     c-15.722,15.788-24.679,36.63-25.223,58.69c-0.584,23.684,8.255,46.001,24.889,62.839c6.24,6.317,7.846,15.838,3.995,23.69     c-4.726,9.637-9.074,20.054-12.924,30.959c-1.379,3.906,0.67,8.19,4.576,9.569c3.906,1.378,8.19-0.67,9.569-4.576     c3.656-10.357,7.776-20.232,12.247-29.347c6.657-13.575,3.928-29.987-6.792-40.837c-13.743-13.912-21.047-32.354-20.565-51.927     c0.449-18.205,7.855-35.419,20.856-48.475c13-13.055,30.184-20.532,48.385-21.054c16.368-0.474,31.899,4.46,44.925,14.253     c7.842,5.897,18.797,5.897,26.639,0c13.026-9.794,28.569-14.728,44.926-14.255c18.201,0.521,35.385,7.998,48.386,21.054     c13.001,13.054,20.408,30.27,20.856,48.475c0.482,19.573-6.82,38.014-20.564,51.927c-10.72,10.85-13.449,27.262-6.792,40.837     c13.727,27.989,23.858,62.843,28.733,98.6c-11.457,7.272-25.006,12.936-41.025,17.158c-4.577-5.721-11.61-9.395-19.49-9.395     H292.51c-11.528,0-21.252,7.859-24.105,18.5c-8.142,0.172-16.674,0.172-24.816,0c-2.854-10.64-12.576-18.5-24.105-18.5h-31.834     c-7.879,0-14.913,3.674-19.49,9.394c-16.024-4.223-29.575-9.889-41.035-17.165c1.703-12.51,4.043-24.956,6.981-37.059     c0.977-4.025-1.495-8.08-5.52-9.057c-4.027-0.977-8.081,1.494-9.057,5.52c-2.409,9.93-4.427,20.082-6.045,30.309     c-13.429-12.013-22.763-27.024-28.435-45.75c-0.954-3.152-1.806-6.451-2.56-9.874c-0.006-0.028-0.012-0.055-0.019-0.083     c-5.185-23.6-5.574-53.297-0.648-84.407c0.127-0.412,0.228-0.837,0.284-1.28c0.034-0.271,0.052-0.541,0.057-0.809     c6.677-40.303,22.258-82.788,47.879-117.319c22.659-30.538,62.903-66.94,125.957-66.94c66.646,0,108.075,40.333,131.094,74.17     c2.329,3.424,6.992,4.313,10.42,1.983c3.425-2.33,4.313-6.995,1.982-10.42c-35.93-52.815-85.551-80.733-143.496-80.733     c-54.848,0-102.569,25.244-138.004,73.003c-23.483,31.649-40.987,73.105-49.288,116.729c-0.079,0.418-0.152,0.835-0.23,1.252     c-28.397-2.08-59.574,4.475-66.914,24.643c-4.701,12.917,1.284,29.143,16.853,45.688c12.61,13.401,29.725,25.105,44.664,30.541     c1.937,0.705,3.896,1.311,5.858,1.832c0.547,2.172,1.129,4.301,1.757,6.372c12.839,42.388,42.995,69.563,92.049,82.922     c-0.029,0.495-0.049,0.993-0.049,1.495c0,13.761,11.195,24.958,24.958,24.958h31.834c10.767,0,19.963-6.854,23.455-16.428     c4.276,0.093,8.641,0.145,13.058,0.145s8.781-0.051,13.058-0.145c3.492,9.573,12.687,16.428,23.455,16.428h31.834     c13.763,0,24.958-11.195,24.958-24.958c0-0.502-0.019-1-0.049-1.494c49.054-13.358,79.21-40.532,92.049-82.922     c0.629-2.076,1.201-4.21,1.747-6.369c1.965-0.521,3.927-1.128,5.868-1.834c14.938-5.438,32.052-17.141,44.663-30.541     C509.15,296.057,515.135,279.831,510.434,266.914z M65.622,328.037c-12.12-5.02-26.083-14.873-36.284-25.715     C18.185,290.47,13.07,279.15,15.656,272.044c3.749-10.303,25.568-16.499,50.427-14.912     C62.669,282.25,62.53,306.719,65.622,328.037z M229.406,436.262c-0.003,0.061,0.001,0.122,0,0.183     c-0.352,5.173-4.661,9.276-9.922,9.276H187.65c-5.49,0-9.957-4.466-9.957-9.957c0-5.49,4.466-9.957,9.957-9.957h31.834     c5.478,0,9.934,4.447,9.955,9.92L229.406,436.262z M324.344,445.721H292.51c-5.261,0-9.571-4.105-9.922-9.279     c-0.002-0.065,0.003-0.128,0-0.193l-0.034-0.485c0-5.49,4.466-9.957,9.956-9.957h31.834c5.49,0,9.957,4.467,9.957,9.957     C334.302,441.255,329.835,445.721,324.344,445.721z M446.38,328.038c3.152-21.611,2.867-45.991-0.565-70.899     c24.899-1.607,46.769,4.589,50.523,14.906C501.91,287.353,472.002,317.468,446.38,328.038z"></path><path d="M315.755,196.002c0-2.828,2.301-5.128,5.128-5.128s5.128,2.301,5.128,5.128c0,4.142,3.357,7.5,7.5,7.5     c4.143,0,7.5-3.358,7.5-7.5c0-11.099-9.029-20.129-20.129-20.129c-11.099,0-20.129,9.03-20.129,20.129c0,4.142,3.357,7.5,7.5,7.5     C312.397,203.503,315.755,200.144,315.755,196.002z"></path><path d="M255.997,271.205c15.207,0,32.361-12.622,35.726-36.748c1.524-10.93-0.507-19.694-6.037-26.049     c-6.079-6.985-16.068-10.527-29.688-10.527c-13.622,0-23.61,3.542-29.689,10.527c-5.53,6.355-7.561,15.12-6.038,26.049     C223.635,258.582,240.789,271.205,255.997,271.205z M237.624,218.255c3.103-3.566,9.284-5.374,18.373-5.374     s15.27,1.808,18.373,5.374c2.555,2.936,3.395,7.689,2.497,14.13c-2.158,15.471-12.363,23.82-20.87,23.82     c-8.507,0-18.712-8.348-20.87-23.819C234.229,225.944,235.069,221.19,237.624,218.255z"></path><path d="M185.982,196.002c0-2.828,2.301-5.128,5.128-5.128c2.828,0,5.128,2.301,5.128,5.128c0,4.142,3.358,7.5,7.5,7.5     s7.5-3.358,7.5-7.5c0-11.099-9.03-20.129-20.129-20.129c-11.099,0-20.129,9.03-20.129,20.129c0,4.142,3.358,7.5,7.5,7.5     S185.982,200.144,185.982,196.002z"></path>
</g>
</g>
</g></svg></span>
      </div></header>
    <section class="u-clearfix u-custom-color-1 u-section-1" id="carousel_42a8">
      <img src="images/1992330469-0.jpeg" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="150" data-image-height="100">
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-palette-5-dark-2 u-size-15 u-size-30-md u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-text u-text-1">01</h2>
                <h4 class="u-text u-text-2">National Care Hotline</h4>
                <p class="u-text u-text-3">1800-202-6868 <br>(8am-12am daily, from 1 Sep 2020)
                </p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-palette-5-dark-1 u-size-15 u-size-30-md u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <h2 class="u-text u-text-4">02</h2>
                <h4 class="u-text u-text-5">Mental Well-Being</h4>
                <p class="u-text u-text-6">- Fei Yue’s Online Counselling Service<br>- Institute of Mental Health’s Mental Health Helpline (6389-2222)<br>- Samaritans of Singapore (1800-221-4444)<br>- Silver Ribbon Singapore (6385-3714)<br> Marital and parenting issues<br>- Community Psychology Hub’s Online Counselling platform
                </p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-palette-1-base u-size-15 u-size-30-md u-layout-cell-3">
              <div class="u-container-layout u-container-layout-3">
                <h2 class="u-text u-text-7">03</h2>
                <h4 class="u-text u-text-8">Violence or Abuse</h4>
                <p class="u-text u-text-9">- Big Love Child Protection Specialist Centre (6445-0400)<br>- HEART @ Fei Yue Child Protection Specialist Centre (6819-9170)<br>- PAVE Integrated Services for Individual and Family Protection (6555-0390)<br>- Project StART (6476-1482)<br>- TRANS SAFE Centre (6449-9088)
                </p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-palette-1-light-1 u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
              <div class="u-container-layout u-container-layout-4">
                <h2 class="u-text u-text-10">04</h2>
                <h4 class="u-text u-text-11">TOUCHline (Counselling)</h4>
                <p class="u-text u-text-12">1800 377 2252</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <section class="u-backlink u-clearfix u-grey-80">
	<p class="u-align-center u-small-text u-text u-text-variant u-text-1">© Happy Pals 2021</p> | 
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