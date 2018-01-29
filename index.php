<?php include "proccesContactForm.php"; ?>

<!doctype html>
<html lang="en">

<!-- ------------------ HEADER FROM HERE -------------------- -->
  <?php require_once('head.php'); ?>

  <body>
    <div id="bodyWrapper">
	<!-- ------------------ NAVIGATION FROM HERE -------------------- -->
    <?php require_once('navigation.php'); ?>

	  <!-- Hamburger icon -->
	  <div id="hamburgerMenuHolder">
	    <div id="barOne"></div>
	    <div id="barTwo"></div>
	    <div id="barThree"></div>
	  </div>

	<!-- ---------------- INTRODUCTION FROM HERE ----------------- -->
	<?php require_once('introduction.php'); ?>

	<!-- ---------------- ABOUT US FROM HERE ----------------- -->
	<?php require_once('aboutUs.php'); ?>

	<!-- ---------------- SERVICES FROM HERE ----------------- -->
	<?php require_once('services.php'); ?>

	<!-- ---------------- PROJETS FROM HERE ----------------- -->
	<?php require_once('projects.php'); ?>

	<!-- ---------------- CONTACT FROM HERE ----------------- -->
	<?php require_once('contact.php'); ?>

<!-- End of the body wrraper -->
</div>


<!-- ------------------ SCRIPTS FROM HERE -------------------- -->
    <?php require_once('scripts.php'); ?>
    
    </body>
</html>