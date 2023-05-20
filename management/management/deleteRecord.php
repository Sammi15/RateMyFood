<?php
include('../../conn.php');

if (isset($_GET['name'])) {
    $query = "DELETE FROM desc_rating";
    $statement = $db->prepare($query);
    $statement->execute();
    $query_one = "DELETE FROM rating";
    $statement_one = $db->prepare($query_one);
    $statement_one->execute();
    // echo "This is Button1 that is selected";

    function_alert("data deleted successfully");
    // $query_one = "DELETE * FROM desc_rating";
    // header('location:../home.php');

} else {
    function_alert("Error occured while deleting the data");
}
function function_alert($message)
{

    echo "<script>alert('$message');</script>";
?>
    <script>
        window.location.replace('../home.php');
    </script>

<?php
}
