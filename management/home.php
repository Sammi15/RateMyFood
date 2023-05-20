<?php session_start(); ?>

<?php require "../conn.php"

?>
<?php


if (!isset($_SESSION['id'])) {
?>
    <script>
        window.location.href = "../index.php";
    </script>
<?php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MessRating</title>
    <link rel="icon" href="../images/sdm_logo.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/path/to/box-shadows.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!-- <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'>
    <link rel="stylesheet" href="css/management_home.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .navbar-default .navbar-brand {
            /* color: #212227; */
            color: #eb5424;
            font-weight: bold;
            font-size: 30px;
            line-height: 45px;
            padding: 10px 0 0 12px;
        }

        .dropdown-menu {
            text-align: center;
        }

        body {
            /* background: #262a2b; */
            background: white;


        }

        .name {
            color: #eb5424;
            font-size: 25px;
            font-weight: bold;
            margin-left: 15px;

        }
    </style>
</head>

<body>


    <div class="navbar navbar-default bs-dos-nav navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <img src="sdm_logo.png" class="fa fa-bars" style="height: 90px; width: 90px;" />
                <a href="#" class="name" style="font-family:cursive;">RateMyFood</a>
                <!-- <a href="./home.php" class="navbar-brand">Ideal Bits</a> -->


            </div>

            <nav class="collapse navbar-collapse" id="rock-navigation">
                <ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
                    <li><a href="./home.php?#home" class="smoothScroll">Home</a></li>
                    <!-- <li><a href="./home.php?#work" class="smoothScroll">Details Page</a></li> -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">IT-GIRLS +</a>
                        <div class="dropdown-menu">
                            <ul>

                                <li style="list-style:none;">

                                    <a href="./management/AddRating/home.php?id=1" class="dropdown-item" style="font-size:11px;">Rating</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/food/index.php?a=1" class="dropdown-item" style="font-size:11px;">Food</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/rating/index.php?a=1" class="dropdown-item" style="font-size:11px;">Review</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/report/Report.php?a=1" class="dropdown-item" style="font-size:11px;">Comments Report</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/rating_report/Report.php?a=1" class="dropdown-item" style="font-size:11px;">Rating Report</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/active_stu/Report.php?a=1" class="dropdown-item" style="font-size:11px;">Students Report</a>
                                </li>

                            </ul>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">IT-BOYS +</a>
                        <div class="dropdown-menu">
                            <ul>

                                <li style="list-style:none;">
                                    <a href="./management/AddRating/home.php?id=2" class="dropdown-item" style="font-size:11px;">Rating</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/food/index.php?a=2" class="dropdown-item" style="font-size:11px;">Food</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/rating/index.php?a=2" class="dropdown-item" style="font-size:11px;">Review</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/report/Report.php?a=2" class="dropdown-item" style="font-size:11px;">Comments Report</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/rating_report/Report.php?a=2" class="dropdown-item" style="font-size:11px;">Rating Report</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/active_stu/Report.php?a=2" class="dropdown-item" style="font-size:11px;">Students Report</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">DHEEMANTH +</a>
                        <div class="dropdown-menu">
                            <ul>

                                <li style="list-style:none;">
                                    <a href="./management/AddRating/home.php?id=3" class="dropdown-item" style="font-size:11px;">Rating</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/food/index.php?a=3" class="dropdown-item" style="font-size:11px;">Food</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/rating/index.php?a=3" class="dropdown-item" style="font-size:11px;">Review</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/report/Report.php?a=3" class="dropdown-item" style="font-size:11px;">Comments Report</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/rating_report/Report.php?a=3" class="dropdown-item" style="font-size:11px;">Rating Report</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/active_stu/Report.php?a=3" class="dropdown-item" style="font-size:11px;">Students Report</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">DHEEMAYI +</a>
                        <div class="dropdown-menu">
                            <ul>

                                <li style="list-style:none;">
                                    <a href="./management/AddRating/home.php?id=4" class="dropdown-item" style="font-size:11px;">Rating</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/food/index.php?a=4" class="dropdown-item" style="font-size:11px;">Food</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/rating/index.php?a=4" class="dropdown-item" style="font-size:11px;">Review</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/report/Report.php?a=4" class="dropdown-item" style="font-size:11px;">Comments Report</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/rating_report/Report.php?a=4" class="dropdown-item" style="font-size:11px;">Rating Report</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/active_stu/Report.php?a=4" class="dropdown-item" style="font-size:11px;">Students Report</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">MITHRI +</a>
                        <div class="dropdown-menu">
                            <ul>

                                <li style="list-style:none;">
                                    <a href="./management/AddRating/home.php?id=5" class="dropdown-item" style="font-size:11px;">Rating</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/food/index.php?a=5" class="dropdown-item" style="font-size:11px;">Food</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/rating/index.php?a=5" class="dropdown-item" style="font-size:11px;">Review</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/report/Report.php?a=5" class="dropdown-item" style="font-size:11px;">Comments Report</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/rating_report/Report.php?a=5" class="dropdown-item" style="font-size:11px;">Rating Report</a>
                                </li>
                                <li style="list-style:none;">
                                    <a href="./management/active_stu/Report.php?a=5" class="dropdown-item" style="font-size:11px;">Students Report</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li><a onclick="confirmation()" class="smoothScroll"><i class="fa fa-trash" style="font-size:15px;color:red"></i></a></li>
                    <li><a href="../logout.php" class="smoothScroll" style="color:red">Logout</a></li>





            </nav>

        </div>
    </div>
    <div class="app">

        <div class="cardList">
            <button class="cardList__btn btn btn--left" id="button_left">
                <div class="icon">
                    <svg style="color:black;">
                        <use xlink:href="#arrow-left"></use>
                    </svg>
                </div>
            </button>

            <div class="cards__wrapper">
                <div class="card current--card">
                    <div class="card__image">
                        <img src="../images/y2.jpg" alt="" />
                    </div>
                </div>

                <div class="card next--card">
                    <div class="card__image">
                        <img src="../images/y1.jpg" alt="" />
                    </div>
                </div>

                <div class="card previous--card">
                    <div class="card__image">
                        <img src="../images/y3.jpg" alt="" />
                    </div>
                </div>
            </div>

            <button class="cardList__btn btn btn--right" id="button_right">
                <div class="icon">
                    <svg>
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </div>
            </button>
        </div>

        <div class="infoList">
            <div class="info__wrapper">
                <div class="info current--info">

                </div>

                <div class="info next--info">

                </div>

                <div class="info previous--info">

                </div>
            </div>
        </div>


        <div class="app__bg">
            <div class="app__bg__image current--image">
                <img src="../images/y2.jpg" alt="" />
            </div>
            <div class="app__bg__image next--image">
                <img src="../images/y1.jpg" alt="" />
            </div>
            <div class="app__bg__image previous--image">
                <img src="../images/y3.jpg" alt="" />
            </div>
        </div>
    </div>

    <div class="loading__wrapper">
        <div class="loader--text">Loading...</div>
        <div class="loader">
            <span></span>
        </div>
    </div>





    <svg class="icons" style="display: none;">

        <symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
            <polyline points='328 112 184 256 328 400' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:65px; ' />
        </symbol>
        <symbol>
            <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                <polyline points='184 112 328 256 184 400' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:55px;' />
            </symbol>
        </symbol>
    </svg>

    <script>
        function confirmation() {
            let text = "Are you sure you want to delete the data.";
            if (confirm(text) == true) {
                window.location.href = "management/deleteRecord.php?name='button1'";
            } else {

            }
        }
    </script>






    <!-- partial -->
    <script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js'></script>
    <script src="js/script.js"></script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>