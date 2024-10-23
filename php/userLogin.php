<?php
$username = $_POST['username'];
$password = $_POST['password'];

$con = new mysqli('localhost', 'root', '', 'vaccination_portal');
if($con->connect_error) {
    die('Connection Failed : ' .$con->connect_error);
}else {
    $stmt = $con->prepare("SELECT * FROM user_details WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password) {
           header("location:index.php");
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "Invalid email or password";
    }
    $stmt->close();
    $con->close();
}
?>