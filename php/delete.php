<?php

$con = new mysqli('localhost', 'root', '', 'vaccination_portal');
if($con->connect_error) {
    die('Connection Failed : ' .$con->connect_error);
}else {
    
$id = $_GET['Id'];
//$userdetails_get_query = "SELECT * FROM userdetails";
$userdetails_delete_query = "DELETE FROM user_details WHERE Id = '$id'";
$result = mysqli_query($con, $userdetails_delete_query);

if($result){
     echo" <script>alert('Deleted')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost/online_vaccination_portal/php/View.php">
    <?php
} else {
    echo" <script>alert('Not Deleted')</script>";
}
}
?>