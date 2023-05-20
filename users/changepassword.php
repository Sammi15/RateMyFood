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
    <link rel="stylesheet" href="../css/card.css">

    <!-- <link rel="stylesheet" href="./css/styleLoginRegister.css"> -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
        }

        .button-33:hover {
            box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
        }

        .ins_res {
            width: 300px;
            height: 40px;
            /* margin-left: 400px */
            margin-bottom: 10px;
        }

        @media screen and (max-width:480px) {
            .ins_res {
                /* margin-left: -25px; */
            }
        }
    </style>
</head>

<body>



    <div class="error_div">


        <!--#################################################### EMPTY_INPUT_ERROR ####################################################-->

        <?php
        if (isset($_SESSION['empty_input'])) {
        ?>
            <div class="alert alert-dismissible fade show errorDivDanger" role="alert">
                <span class="errorSpan" style="display: flex;  align-items:center;"> <strong><i class="bx bx-error-circle bx-sm"></i></strong>
                    <?php echo $_SESSION['empty_input']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </span>
            </div>
        <?php
            unset($_SESSION['empty_input']);
        }
        ?>

        <?php
        if (isset($_SESSION['wrong_input'])) {
        ?>
            <div class="alert alert-dismissible fade show errorDivDanger" role="alert">
                <span class="errorSpan" style="display: flex;  align-items:center;"> <strong><i class="bx bx-error-circle bx-sm"></i></strong>
                    <?php echo $_SESSION['wrong_input']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </span>
            </div>
        <?php
            unset($_SESSION['wrong_input']);
        }
        ?>

    </div>

    <div class="grid">
        <div class="grid__item">
            <div class="card">

                <div class="card__content">
                    <h1 class="card__header">Enter New Password</h1>
                    <!-- <p class="card__text">Look up at the night sky, and find yourself </p> -->
                    <form action="" method="POST" id="LoginForm" class="card__text" style="text-align:center;">
                        <hr style="width: 100%;">
                        <br>
                        <input type="password" class="ins_res" name="password" id="password" placeholder="Enter New Password" autocomplete="off">
                        <!-- <input type="submit" name="reset" class="input_button_check" value="Reset"> -->
                        <!-- <hr style="width: 100%;"> -->
                        <button type="submit" name="reset" class="card__btn">Submit<span>&rarr;</span></button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- <div class="content_div">

        <div class="form_container">

            <div class="form_control_div">
                <span>Enter New Password</span>
            </div>

            <div class="input_forms">

                <form action="" method="POST" id="LoginForm">
                    <hr style="width: 100%;">
                    <br>
                    <input type="password" name="password" id="password" placeholder="Enter New Password" autocomplete="off">
                    <input type="submit" name="reset" class="input_button_check" value="Reset">
                    <hr style="width: 100%;">
                </form>

            </div>

        </div>
    </div> -->


    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>


<?php

if (isset($_POST['reset'])) {


    $password = $_POST['password'];
    $change = $_SESSION['user_name'];
    $query = "UPDATE users SET password='$password' WHERE name='$change' ";

    $data = mysqli_query($db, $query);

    if ($data) {
?>
        <script>
            window.location.href = "../index.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            window.location.href = "./changepassword.php";
        </script>
<?php
    }
}


?>