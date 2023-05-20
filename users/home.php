<?php
session_start();

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
  <link rel="stylesheet" href="../css/u_home.css">
  <style>
    body {
      font-family: cursive, arial, helvetica, sans-serif;
    }

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
    }

    .button-33:hover {
      box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
      transform: scale(1.05) rotate(-1deg);
    }

    .logo {
      height: 120px;
      width: 120px;
    }

    @media screen and (max-width:480px) {
      .button-33 {
        width: 60%;
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
  </style>
</head>

<body>
  <div class="centerer">

    <img src="../images/sdm_logo.png" class="fa fa-bars logo" style="" />
    <h1 style="color:orange;font-family:cursive" class="heading">Rate my food</h1>
    <div align="center">

      <a class="button-33" href="student_menu.php?value=Breakfast">Breakfast</a>
      <a class="button-33" href="student_menu.php?value=Lunch">Lunch</a>
      <a class="button-33" href="student_menu.php?value=Snack">Snacks</a>
      <a class="button-33" href="student_menu.php?value=Dinner">Dinner</a>
      <a class="button-33" href="resetpassword.php">Change Password</a>
      <a  href="../logout.php"  style="font-size:25px">logout</a>
    </div>

  </div>

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