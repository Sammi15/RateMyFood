<?php
session_start();
include "conn.php";
$user = $_POST['username'];
$password = $_POST["password"];
// $fpassword = md5($password);
$query = mysqli_query($db, "SELECT * FROM  users  WHERE name='$user' and password='$password'");

if (mysqli_num_rows($query) == 0) {

?>
    <script>
        window.alert('Invalid Credentials');
        window.location.href = "index.php";
    </script>
    <!-- <script>
			
            window.location.href="../../views/index.php";
			</script> -->
    <?php
} else {
    $_SESSION['error'] = "";
    $row = mysqli_fetch_array($query);
    if ($row['role'] == 'admin') {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['id'] = $row['name'];
        $_SESSION['hostel_id'] = $row['hostel_id'];
    ?>
        <script>
            window.alert('Login Success, Welcome Admin!');
            window.location.href = './admin/index.php';
        </script>
    <?php
    } elseif ($row['role'] == 'Student') {

        $_SESSION['id'] = $row['user_id'];
        $_SESSION['hostel_id'] = $row['hostel_id'];
        $_SESSION['userid'] = $row['name'];
    ?>
        <script>
            window.alert('Login Success, Welcome User!');
            window.location.href = "./users/home.php";
        </script>
    <?php
    } elseif ($row['role'] == 'management') {
     
        $_SESSION['id'] = $row['user_id'];
    ?>
        <script>
            window.alert('Login Success, Welcome management!');
            window.location.href = './management/home.php';
        </script>
<?php
    }
}
?>