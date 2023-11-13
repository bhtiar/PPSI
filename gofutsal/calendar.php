<!DOCTYPE html>
<html lang="en">
<head>
  <title>ASS Studio || Home</title>
  <link rel="shortcut icon" href="assets/images/Goputsalgaji.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
  <!-- Stylesheet full Calendar -->
  <link rel="stylesheet" href="calendarbo/assets/bootstrap.css">
  <link rel="stylesheet" href="calendarbo/assets/fullcalendar.css">
  <script src="calendarbo/assets/fullcalendar.min.js"></script>
  <script src="calendarbo/assets/jquery-ui.min.js"></script>
  <script src="calendarbo/assets/jquery.min.js"></script>
  <script src="calendarbo/assets/moment.min.js"></script>

  <!-- EndStylesheet full Calendar -->

    <style>
  	body { 
			padding-top: 50px;
			background-color:#CCC;	
	 }
    .modal-title {
      color: #424e5e;
    }
    a {
      color: #870000;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>
  <?php
  include "navbar.php";
    include "member_login.php";
    include "opt_login.php";
     ?>


  <div class="container">
    <div id="calendar"></div>
  </div>














<?php include ("footer.php"); ?>


<script>
    // 1
    $(document).ready(function(){
      var calendar = $('#calendar').fullCalendar({
          // 2
          editable: true,
          // 3
          header:{
            
          }
      });
    })
  </script>
</body>
</html>
