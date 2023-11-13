<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Stylesheet full Calendar -->
  <link rel="stylesheet" href="calendarbo/assets/bootstrap.css">
  <link rel="stylesheet" href="calendarbo/assets/fullcalendar.css">
  <script src="calendarbo/assets/fullcalendar.min.js"></script>
  <script src="calendarbo/assets/jquery-ui.min.js"></script>
  <script src="calendarbo/assets/jquery.min.js"></script>
  <script src="calendarbo/assets/moment.min.js"></script>

  <!-- EndStylesheet full Calendar -->

</head>
<body>
    
<div class="container">
    <div id="calendar"></div>
  </div>
  
  
  
  
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