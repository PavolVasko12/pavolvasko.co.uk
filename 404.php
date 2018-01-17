<?php include "processContactForm.php"; ?>

<!doctype html>
<html lang="en">

<!-- ------------------ HEADER FROM HERE -------------------- -->
  <?php require_once('head.php'); ?>

  <body>
    <div id="bodyWrapper">
<!-- ------------------ NAVIGATION FROM HERE -------------------- -->
    <?php require_once('navigation.php'); ?>

    <div id="header">
      <!-- Hamburger icon -->
      <div id="hamburgerMenuHolder">
        <div id="barOne"></div>
        <div id="barTwo"></div>
        <div id="barThree"></div>
      </div>

      <h1 id="headerH1">404, page not found.</h1>
      <h3>The page you’ve requested seems to be unavailable or non-exisitant.<h3>
      <h3>Please visit another page or click the button below to go back.</h3>
      <a href="index.php"><button id="header404Button" class="greenBorderNoBackgroundButton">BACK HOME</button></a>
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
