<?php include "processContactForm.php"; ?>

<!doctype html>
<html lang="en">

<!-- ------------------ HEADER FROM HERE -------------------- -->
  <?php require_once('head.php'); ?>

  <body>
    <div id="bodyWrapper">
<!-- ------------------ NAVIGATION FROM HERE -------------------- -->
    <?php require_once('navigation.php'); ?>


<!-- ------------------ HEADER FROM HERE -------------------- -->
<div id="portfolioHeader">
  <!-- Hamburger icon -->
  <div id="hamburgerMenuHolder">
    <div id="barOne"></div>
    <div id="barTwo"></div>
    <div id="barThree"></div>
  </div>
  <div id="portfoiloHeaderHolder">
    <h1 id="porfolioH1">PORTFOLIO</h1>
  </div>
</div>

<div id="ocipHolder">
  <div id="holderForOcipText">
    <h1>Ocip-Group</h1>
    <p>Ocip-Group needed a bespoke website build to perfection, were every detail needed to be carefully planned and developed to the very
       high standard. Website possess modern features that are used across different pages, the website is highly responsive and compatible across different browsers.</p>
       <a href="http://ocip-group.com/" alt="link to ocip-group.com website - Web Development by Pavol Vasko"><button class="blackBorderNoBackgroundButton">View website</button></a>
  </div>
  <div id="holderForBrowserImage">
    <a href="http://ocip-group.com/" target="_blank" alt="Link to the Ocip-Group website, developed by Pavol Vasko"><img src="Media/Portfolio/ocip_browser_image.png" alt="Ocip-Group example of web development"></a>
  </div>
</div>

<hr>

<div id="daciHolder">
  <div id="holderForPhoneImage">
    <a href="http://www.daci.co.uk/" target="_blank" alt="Link to the Daci website, developed by Pavol Vasko"><img src="Media/Portfolio/daci_iphone_image.png" alt="Daci - example of web development"></a>
  </div>
  <div id="holderForDaciText">
    <h1>Daci</h1>
    <p>Daci came to me with requirement to improve their current design and make the website CMS.
       Through careful planning and listening to my client I have completely redesigned and built the website in <a href="https://umbraco.com/" target="_blank" alt="Link to the Umbraco CMS website - the opne source CMS">Umbraco CMS.</a></p>
       <a href="http://www.daci.co.uk/" alt="link to Daci.co.uk website - Web Development by Pavol Vasko"><button class="blackBorderNoBackgroundButton">View website</button></a>
  </div>

</div>






<!-- ------------------ CONTACT FORM FROM HERE -------------------- -->
    <?php require_once('contact.php'); ?>

<!-- ------------------ FOOTER FROM HERE -------------------- -->
    <?php require_once('footer.php'); ?>

    </div>
<!-- ------------------ SCRIPTS FROM HERE -------------------- -->
    <?php require_once('scripts.php'); ?>
  </body>
</html>
