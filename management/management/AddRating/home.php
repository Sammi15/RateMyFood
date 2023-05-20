<?php
session_start();
include "../../../conn.php";
$_SESSION['hostel_id'] = $_GET['id'];
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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MessRating</title>
  <link rel="icon" href="../../../images/sdm_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="u_home.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="../../css/templatemo-style.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
      background-color: white;
      border-radius: 10px;
      box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
      color: green;
      cursor: pointer;
      display: inline-block;
      font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
      /* padding: 7px 20px; */
      text-align: center;
      text-decoration: none;
      transition: all 250ms;
      border: 0;
      font-size: 16px;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      display: block;
      margin: 20px;
      width: 30%;
      height: 30%;
      font-family: cursive;
      text-decoration: none;
    }

    .button-33:hover {
      box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
      transform: scale(1.05) rotate(-1deg);
    }

    .logo {
      height: 120px;
      width: 120px;
    }

    @media screen and (max-width:400px) {
      .button-33 {
        width: 50%;
        height: 5%;
        font-size: 12px;
      }

      .logo {
        height: 60px;
        width: 60px;
      }

      .heading {
        font-size: 22px;
      }
    }



    .input_design {
      padding: 7px;
      border-radius: 6px;
      font-size: 16px;
      background: #fbfbfb;
      border: 2px solid transparent;
      height: 36px;
      box-shadow: 0 0 0 1px #dddddd, 0 2px 4px 0 rgb(0 0 0 / 7%), 0 1px 1.5px 0 rgb(0 0 0 / 5%);
    }

    :focus {
      border: 2px solid #000;
      border-radius: 4px;
    }









    /* //nav bar
     */


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
.dropdown-menu{
    text-align: center;
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
  </style>

</head>

<body style="background-color:white">
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
          <li><a href="../../home.php?#home" class="smoothScroll" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b>Home</b></a></li>
          <!-- <li><a href="./home.php?#work" class="smoothScroll">Details Page</a></li> -->
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">IT-GIRLS +</a>
            <div class="dropdown-menu">
              <ul>

                <li style="list-style:none;margin-left:-40px">

                  <a href="../AddRating/home.php?id=1" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b>Rating</b></a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../food/index.php?a=1" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Food</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../rating/index.php?a=1" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Review</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../report/Report.php?a=1" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Comments Report</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../rating_report/Report.php?a=1" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rating Report</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../active_stu/Report.php?a=1" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Students Report</a>
                </li>

              </ul>
            </div>
          </li>


          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">IT-BOYS +</a>
            <div class="dropdown-menu">
              <ul>

                <li style="list-style:none;margin-left:-40px">
                  <a href="../AddRating/home.php?id=2" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rating</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../food/index.php?a=2" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Food</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../rating/index.php?a=2" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Review</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../report/Report.php?a=2" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Comments Report</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../rating_report/Report.php?a=2" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rating Report</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../active_stu/Report.php?a=2" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Students Report</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">DHEEMANTH +</a>
            <div class="dropdown-menu">
              <ul>

                <li style="list-style:none;margin-left:-40px">
                  <a href="../AddRating/home.php?id=3" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rating</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../food/index.php?a=3" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Food</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../rating/index.php?a=3" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Review</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../report/Report.php?a=3" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Comments Report</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../rating_report/Report.php?a=3" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rating Report</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../active_stu/Report.php?a=3" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Students Report</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">DHEEMAYI +</a>
            <div class="dropdown-menu">
              <ul>

                <li style="list-style:none;margin-left:-40px">
                  <a href="../AddRating/home.php?id=4" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rating</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../food/index.php?a=4" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Food</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../rating/index.php?a=4" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Review</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../report/Report.php?a=4" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Comments Report</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../rating_report/Report.php?a=4" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rating Report</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../active_stu/Report.php?a=4" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Students Report</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">MITHRI +</a>
            <div class="dropdown-menu">
              <ul>

                <li style="list-style:none;margin-left:-40px">
                  <a href="../AddRating/home.php?id=5" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rating</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../food/index.php?a=5" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Food</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../rating/index.php?a=5" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Review</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../report/Report.php?a=5" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Comments Report</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../rating_report/Report.php?a=5" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rating Report</a>
                </li>
                <li style="list-style:none;margin-left:-40px">
                  <a href="../active_stu/Report.php?a=5" class="dropdown-item" style="font-size:11px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Students Report</a>
                </li>
              </ul>
            </div>
          </li>

          <li><a onclick="confirmation()" class="smoothScroll"><i class="fa fa-trash" style="font-size:15px;color:red;"></i></a></li>
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

  <div class="centerer">

    <!-- <img src="../images/sdm_logo.png" class="fa fa-bars logo" style="" />
    <h1 style="color:orange;font-family:cursive" class="heading">Rate my food</h1> -->
    <div align="center" style="margin-bottom:200px;margin-top:150px">

      <a class="button-33" href="student_menu.php?value=Breakfast">Breakfast</a>
      <a class="button-33" href="student_menu.php?value=Lunch">Lunch</a>
      <a class="button-33" href="student_menu.php?value=Snack">Snacks</a>
      <a class="button-33" href="student_menu.php?value=Dinner">Dinner</a>

    </div>

  </div>


  <script>
function confirmation(){
    let text = "Are you sure you want to delete the data.";
    if(confirm(text) == true){
        window.location.href="../deleteRecord.php?name='button1'";
    }else{

    }
}    
</script>

  <script>
    $(function() {
      $('.btn-6')
        .on('mouseenter', function(e) {
          var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
          $(this).find('span').css({
            top: relY,
            left: relX
          })
        })
        .on('mouseout', function(e) {
          var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
          $(this).find('span').css({
            top: relY,
            left: relX
          })
        });
    });
  </script>
</body>

</html>