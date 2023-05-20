<?php

session_start();
include "../../../conn.php";



// include '../../home.php';

$_SESSION['hostel'] = $_GET['a'];
$hstl = $_SESSION['hostel'];
?>
<?php


if (!isset($_SESSION['id'])) {
?>
    <script>
        window.location.href = "../../../index.php";
    </script>
<?php
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>MessRating</title>
    <link rel="icon" href="../../../images/sdm_logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../css/templatemo-style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../css/res-table.css">
    <link href="../../css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- nav bar -->

    <link rel="stylesheet" href="/path/to/box-shadows.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/templatemo-style.css">
    <!-- <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .button-33 {
            background-color: #c2fbd7;
            border-radius: 100px;
            box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
            color: green;
            cursor: pointer;
            display: inline-block;
            font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            transition: all 250ms;
            border: 0;
            width: 230px;
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-33:hover {
            box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
        }

        .button-30 {
            background-color: white;
            border-radius: 100px;
            box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
            color: green;
            cursor: pointer;
            display: inline-block;
            font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            transition: all 250ms;
            border: 0;
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-30:hover {
            box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
        }

        @media only screen and (max-width: 400px) {
            .button-33 {
                margin-top: 30px;
                margin-left: 90px;

            }



            .button-30 {
                margin-top: 30px;
            }



        }

        .style_text {
            color: #41cc74;
            font-family: cursive;
            font-size: 16px;
        }

        .div_style {
            display: inline-block;
        }

        input,
        select {
            border-radius: 5px;
        }

        select {
            margin-left: 17px;
            width: 210px;
            height: 30px;
            -webkit-appearance: none;
            padding: 5px;
        }

        /* body{
            background-image: url('images/hero-bg.jpg');
            background-size: ;
            background-position: center;;
        } */


        input,
        select {
            border-radius: 5px;
        }

        select {
            margin-left: 17px;
            width: 210px;
            height: 30px;
            -webkit-appearance: none;
            padding: 5px;
        }

        /* body{
            background-image: url('images/hero-bg.jpg');
            background-size: ;
            background-position: center;;
        } */



        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #333;
            color: white;
            font-weight: bold;
        }

        td,
        th {
            padding: 6px;
            border: 1px solid #ccc;
            text-align: left;
        }

        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {

            /* Force table to not be like tables anymore */
            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;

            }

            th {
                color: black;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding: 0;
            }

            td:before {
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                left: 0px;
                width: 45%;
                float: left;
                padding-right: 200px;
                /* white-space: nowrap; */
            }

            /*
    Label the data
    */


            td:nth-of-type(1):before {
                margin-left: 20px;
                margin-top: 5px;
                content: "SR.NO";


            }

            td:nth-of-type(2):before {
                margin-left: 20px;
                margin-top: 5px;
                content: "ROLL_NUMBER";
            }

            td:nth-of-type(3):before {
                margin-left: 20px;
                margin-top: 5px;
                content: "HOSTEL_NAME";
            }

            td:nth-of-type(4):before {
                margin-left: 20px;
                margin-top: 5px;
                content: "ROLE";
            }

            td:nth-of-type(5):before {
                margin-left: 20px;
                margin-top: 5px;
                content: "TIMESTAMP";
            }

            /* td:nth-of-type(4):before {
                margin-left: 20px;
                content: "CATEGORY";
            }

            td:nth-of-type(5):before {
                margin-left: 20px;
                content: "FOOD_NAME";
            }

            td:nth-of-type(6):before {
                margin-left: 20px;
                content: "COOK_NAME";
            }

            td:nth-of-type(7):before {
                margin-left: 20px;
                content: "RATING";
            } */



            /* td:nth-of-type(9):before {
                content: "GPA";
            } */
            /* 
            td:nth-of-type(10):before {
                content: "Arbitrary Data";
            } */
        }

        /* //nav bar
     */
    .dropdown-menu{
    text-align: center;
}

        .iframe_set {
            height: 800px;
            width: 1000px;
        }

        .word-waves span {
            position: absolute;
            color: black;
            font-size: 6rem;
            transform: translate(-50%, -50%);
            /* text-align: center; */
            /* margin: 200px 0px 0px 500px ; */
            margin-top: 20px;
            font-weight: bold;

        }

        .word-waves span:nth-child(1) {
            color: transparent;
            -webkit-text-stroke: 0.9px #eb5424;
            font-weight: bold;

        }

        .word-waves span:nth-child(2) {
            color: #eb5424;
            -webkit-text-stroke: 0.9px #eb5424;
            animation: animation 3s ease-in-out infinite;
            font-weight: bold;
        }

        #menubar {
            font-size: 12px;
            font-family: Montserrat, sans-serif;
        }

        @keyframes animation {

            0%,
            100% {
                clip-path: polygon(0% 45%, 15% 44%, 32% 50%, 54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
            }

            50% {
                clip-path: polygon(0% 60%, 16% 65%, 34% 66%, 51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%);
            }

        }

        @media only screen and (max-width :600px) {
            .word-waves span {
                font-size: 3rem;
            }

            #menubar {
                font-size: 9px;
            }

            .iframe_set {
                height: 500px;
                width: 960px;
                overflow-x: none;
                overflow-y: scroll;
            }

            .tm-red-text {
                font-size: 2.5rem;
            }
        }

        @media only screen and (max-width :900px) {
            .word-waves span {

                font-size: 3rem;


            }

            .calendar_scroll {
                overflow-x: scroll;
            }
        }

        .navbar-default .navbar-brand {
            /* color: #212227; */
            color: #eb5424;
            font-weight: bold;
            font-size: 30px;
            line-height: 45px;
            padding: 10px 0 0 12px;
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
        @media screen and (max-width:480px) {
            .button-30{
                margin-bottom:20px;
            }            
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

                <img src="../../sdm_logo.png" class="fa fa-bars " style="height: 90px; width: 90px;" />
                <a href="#" class="name" style="text-decoration:none">RateMyFood</a>
                <!-- <a href="./home.php" class="navbar-brand">Ideal Bits</a> -->


            </div>

            <nav class="collapse navbar-collapse" id="rock-navigation">
                <ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
                    <li><a href="../../home.php?#home" class="smoothScroll">Home</a></li>
                    <!-- <li><a href="./home.php?#work" class="smoothScroll">Details Page</a></li> -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">IT-GIRLS +</a>
                        <div class="dropdown-menu">
                            <ul>

                                <li style="list-style:none;margin-left:-40px">

                                    <a href="../AddRating/home.php?id=1" class="dropdown-item" style="font-size:11px;">Rating</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../food/index.php?a=1" class="dropdown-item" style="font-size:11px;">Food</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../rating/index.php?a=1" class="dropdown-item" style="font-size:11px;">Review</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../report/Report.php?a=1" class="dropdown-item" style="font-size:11px;">Comments Report</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../rating_report/Report.php?a=1" class="dropdown-item" style="font-size:11px;">Rating Report</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="Report.php?a=1" class="dropdown-item" style="font-size:11px;">Students Report</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">IT-BOYS +</a>
                        <div class="dropdown-menu">
                            <ul>

                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../AddRating/home.php?id=2" class="dropdown-item" style="font-size:11px;">Rating</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../food/index.php?a=2" class="dropdown-item" style="font-size:11px;">Food</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../rating/index.php?a=2" class="dropdown-item" style="font-size:11px;">Review</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../report/Report.php?a=2" class="dropdown-item" style="font-size:11px;">Comments Report</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../rating_report/Report.php?a=2" class="dropdown-item" style="font-size:11px;">Rating Report</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="Report.php?a=2" class="dropdown-item" style="font-size:11px;">Students Report</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">DHEEMANTH +</a>
                        <div class="dropdown-menu">
                            <ul>

                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../AddRating/home.php?id=3" class="dropdown-item" style="font-size:11px;">Rating</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../food/index.php?a=3" class="dropdown-item" style="font-size:11px;">Food</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../rating/index.php?a=3" class="dropdown-item" style="font-size:11px;">Review</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../report/Report.php?a=3" class="dropdown-item" style="font-size:11px;">Comments Report</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../rating_report/Report.php?a=3" class="dropdown-item" style="font-size:11px;">Rating Report</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="Report.php?a=3" class="dropdown-item" style="font-size:11px;">Students Report</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">DHEEMAYI +</a>
                        <div class="dropdown-menu">
                            <ul>

                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../AddRating/home.php?id=4" class="dropdown-item" style="font-size:11px;">Rating</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../food/index.php?a=4" class="dropdown-item" style="font-size:11px;">Food</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../rating/index.php?a=4" class="dropdown-item" style="font-size:11px;">Review</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../report/Report.php?a=4" class="dropdown-item" style="font-size:11px;">Comments Report</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../rating_report/Report.php?a=4" class="dropdown-item" style="font-size:11px;">Rating Report</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="Report.php?a=4" class="dropdown-item" style="font-size:11px;">Students Report</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">MITHRI +</a>
                        <div class="dropdown-menu">
                            <ul>

                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../AddRating/home.php?id=5" class="dropdown-item" style="font-size:11px;">Rating</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../food/index.php?a=5" class="dropdown-item" style="font-size:11px;">Food</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../rating/index.php?a=5" class="dropdown-item" style="font-size:11px;">Review</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../report/Report.php?a=5" class="dropdown-item" style="font-size:11px;">Comments Report</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="../rating_report/Report.php?a=5" class="dropdown-item" style="font-size:11px;">Rating Report</a>
                                </li>
                                <li style="list-style:none;margin-left:-40px">
                                    <a href="Report.php?a=5" class="dropdown-item" style="font-size:11px;">Students Report</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li><a href="Report.php" class="smoothScroll">REPORT</a></li> -->
                    <li><a onclick="confirmation()" class="smoothScroll"><i class="fa fa-trash" style="font-size:15px;color:red"></i></a></li>
                    <li><a href="../../../logout.php" class="smoothScroll" style="color:red">Logout</a></li>
                    <!-- 
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">REPORT</a>
                        <div class="dropdown-menu">
                            <ul>

                                
                                <li style="list-style:none;">
                                    <a href="./management/rating/Report.php" class="dropdown-item" style="font-size:11px;">Report</a>
                                </li>
                                

                            </ul>
                        </div>
                    </li> -->



            </nav>

        </div>
    </div>
    <div class="area" id="body1">

        <div class="main-divi" id="body1">
            <div class=" card_container m-1 row" id="body1">


                <br>


                <br>

                <center>
                    <div class="div_style" style="margin-top:6%;">

                        <form action="" method="POST">


                            <h3 class="style_text" style="padding-top:20px;"><u>Generate Report:</u></h3>
                            <label for="startdate" class="style_text"> <b>Start Date:</b> </label>
                            &nbsp;&nbsp;
                            <input type="datetime-local" name="startdate" class="inputFilterDate button-30" id="startdate t1" autocomplete="off" required>
                            &nbsp;&nbsp;&nbsp;
                            <label for="enddate" class="style_text"> <b>End Date:</b> </label>
                            &nbsp;&nbsp;&nbsp;
                            <input type="datetime-local" name="enddate" class="inputFilterDate button-30" id="enddate t1" autocomplete="off" required>
                            &nbsp; &nbsp;
                            <input type='submit' value='Submit' class='button-33'>


                        </form>

                    </div>
                    <center>

                        <?php

                        error_reporting(0);

                        // $startdate = "0000-00-00 00:00:00.000000";
                        // $enddate = "0000-00-00 00:00:00.000000";

                        $startdate = $_POST['startdate'];
                        $enddate = $_POST['enddate'];

                        $_SESSION['startdate'] = $startdate;
                        $_SESSION['enddate'] = $enddate;

                        // $sql = "SELECT * FROM food f CROSS JOIN desc_rating d ON f.food_id = d.food_id CROSS JOIN users u ON u.user_id = d.user_id CROSS JOIN rating r ON r.hostel_id = r.hostel_id CROSS JOIN hostel h ON h.hostel_id = r.hostel_id CROSS JOIN cook c ON c.hostel_id = h.hostel_id WHERE timestamp BETWEEN '$startdate' AND '$enddate' ";
                        // $sql = "SELECT * FROM food f UNION SELECT * FROM desc_rating d";
                        $sql = "SELECT * FROM rating r INNER JOIN users u ON u.user_id = r.user_id INNER JOIN hostel h ON u.hostel_id=h.hostel_id WHERE timestamp BETWEEN '$startdate' AND '$enddate' and r.hostel_id = $hstl";



                        // $sql_one = "SELECT * FROM desc_rating d INNER JOIN rating r ON d.rating_id=r.rating_id WHERE r.timestamp BETWEEN 'start' AND '$ed'";
                        // $result_one = mysqli_query($mysqli, $sql_one);

                        // if ($result_one === FALSE) {
                        //     die(mysqli_error($mysqli));
                        // }

                        // $row_one = mysqli_fetch_assoc($result_one);


                        $result = $db->query($sql);
                        $order_id = array();

                        ?>



                        <div class="tables">

                            <?php
                            ?>
                            <table> 
                                <thead>
                                    <tr>

                                        <th style="background-color:white;color:grey;font-family:cursive;">SR. NO</th>
                                        <th style="background-color:white;color:grey;font-family:cursive;">ROLL NUMBER
                                        </th>
                                        <th style="background-color:white;color:grey;font-family:cursive;">HOSTEL NAME</th>
                                        <th style="background-color:white;color:grey;font-family:cursive;">ROLE</th>
                                        <th style="background-color:white;color:grey;font-family:cursive;">DATE AND TIME
                                        </th>



                                    </tr>
                                </thead>

                                <?php
                                if ($result->num_rows > 0) {
                                    $count = 0;
                                    while ($row = $result->fetch_assoc()) {
                                        $count++;
                                        echo "
                            <tbody id='myTable'> ";
                                ?>

                                <?php

                                        date_default_timezone_set("Asia/Kolkata");

                                        echo "
                           
                                    
                            <td style='margin-right:20px;font-family:cursive;'>" . $count . "</td>
                            <td style='margin-right:20px;font-family:cursive;'>" . $row['name'] . "</td>
                             <td style='margin-right:20px;font-family:cursive;'>" . $row['hostel_name'] . "</td>
                              <td style='margin-right:20px;font-family:cursive;'>" . $row['role'] . "</td>
                              <td style='margin-right:20px;font-family:cursive;'>" .$row['timestamp']. "</td>";
                                    }
                                }

                                echo "</tbody>";
                                echo "</table>";

                                ?>
                                <br />
                                <div style="margin-right:30px;">
                                    <?php
                                    echo "
                            <a href='excelReport.php?sd=$_SESSION[startdate]&ed=$_SESSION[enddate]'>
                                <button style='z-index:100; float:right; margin-bottom:20px; background-color:lightblue;' class='excelReportBtn button-33'>Excel Report</button>
                            </a>
                            ";


                                    ?>
                                </div>
                        </div>

                        <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
            </div>
        </div>

    </div>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <script>
function confirmation(){
    let text = "Are you sure you want to delete the data.";
    if(confirm(text) == true){
        window.location.href="../deleteRecord.php?name='button1'";
    }else{

    }
}    
</script>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/jquery.nav.js"></script>
    <script src="../js/isotope.js"></script>
    <script src="../js/imagesloaded.min.js"></script>
    <script src="../js/custom.js"></script>


</body>

</html>