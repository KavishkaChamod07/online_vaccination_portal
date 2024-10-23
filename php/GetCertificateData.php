<?php
    include "Config.php";
 
    // $nic = $_POST['nic'];

    // $query="SELECT * from user_appointment WHERE nic = '" . $nic . "'";
    $query="SELECT * from user_appointment WHERE nic = '962353372V'";

    $result = $conn->query($query);

    echo "<script type='text/javascript'>alert('$result->num_rows');</script>";

    // $result = mysqli_query($conn, $query);

    // $cust = mysqli_fetch_array($result);

    // if($cust) {

    //  echo json_encode($cust);

    // } else {

    //  echo "Error: " . $sql . "" . mysqli_error($dbCon);

    // }
 
?>