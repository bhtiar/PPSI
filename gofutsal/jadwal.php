<!DOCTYPE html>
<html lang="en">

<head>
    <title>ASS Studio || Home</title>
    <link rel="shortcut icon" href="assets/images/Goputsalgaji.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS for full calendar -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
    <!-- JS for jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS for full calendar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    <!-- Bootstrap CSS and JS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" /> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <!-- Style ASS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="assets/css/w3.css">
    <!-- <link rel="stylesheet" href="assets/css/w3-theme-blue-grey.css"> -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->


    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" /> -->

    <!-- font awesome cdn link  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->

    <!-- custom css file link  -->
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->

    <style>
        body {
            padding-top: 50px;
            background-color: #CCC;
        }

        .modal-title {
            color: #424e5e;
        }

        h1 {
            text-align: center;
            padding: 50px;
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
            width: 100%;
            /* Set width to 100% */
            margin: auto;
            min-height: 200px;
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

    <!-- about section -->
    <section class="hero">

        <div class="swiper hero-slider">

            <div class="swiper-wrapper">
                <h1>JADWAL ASS Stuio Musik</h1>
                <div class="container">
                    <div id="calendar"></div>
                </div>
            </div>

    </section>


    <script>
        $(document).ready(function () {
            var calendar = $('#calendar').fullCalendar({
                editable: true,
                header: {
                    left: 'prev, next today',
                    center: 'title, date',
                    right: 'month, agendaWeek, agendaDay'
                },
                events: 'tampil.php', // Provide the correct URL for your events
                selectable: true,
                selectHelper: true
            });

        });
    </script>

    <?php include("footer.php"); ?>

</body>

</html>