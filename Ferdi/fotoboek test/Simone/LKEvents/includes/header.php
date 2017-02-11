<?php

include('includes/arrays.php');

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
  <script src="jscript/main.js"></script>
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  
  <link rel="shortcut icon" href="img/logovrijklein.png">


<title><?php echo TITLE;?></title>
</head>
<body>

<div class="fadein">
  <img class="sliderimg" src="img/slider1.jpg">
  <img class="sliderimg" src="img/slider2.jpg">
  <img class="sliderimg" src="img/slider3.jpg">
</div>
<div class="sliderarrowprevious">
  <div class="previousButton"></div>
</div>
<div class="sliderarrownext">
  <div class="nextButton"></div>
</div>

<nav class="main-nav">
  <div class="nav-logo"><a href="index.html">LK EVENTS</a></div>
  <div class="nav-logo2">Leroy Kuipers</div>
   <?php include('includes/nav.php'); ?>
  <div class="handle">Menu</div>
</nav>