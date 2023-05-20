<?php
SESSION_START();
?>

<?php
include ('../conn.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $_SESSION['user_name'] = $user_name;
    $password = $_POST["password"];
    $_SESSION['password'] = $password;

    $sql = "SELECT * FROM users WHERE name='" . $user_name . "' AND password='" . $password . "'";

    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);

    if ($count == 1) {

        header("Location:./changepassword.php");
    } else {
        echo '<script>alert("Invalid Input, Please try again...!")</script>';
        echo '<script>window.location.replace("resetpassword.php")</script>';
    }
}
