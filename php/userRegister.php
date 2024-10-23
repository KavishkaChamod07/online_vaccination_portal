<?php
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    $errors = array(); 
    
 
    $conn = new mysqli('localhost', 'root', '', 'vaccination_portal');
    if($conn->connect_error){
        die('Connection Failed :' .$conn->connection_error);
    }else{
        
        if(empty($firstname)) {
            array_push($errors, "First name-null");
            echo "First name is required<br>"; }
        if(empty($lastname)) {
            array_push($errors, "Last name-null"); 
            echo "Last name is required<br>"; }
        if(empty($username)) {
            array_push($errors, "Username-null"); 
            echo "User name is required<br>"; }
        if(empty($email)) {
            array_push($errors, "Email-null"); 
            echo "email is required<br>"; }
        if(empty($password_1)) {
            array_push($errors, "Password-null"); 
            echo "Password is required<br>"; }
        if($password_1 != $password_2) {
            array_push($errors, "Passwords doesn't match"); 
            echo "Re enter the same password as above<br>"; }
        
        $userdetails_check_query = "SELECT * FROM user_details WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $userdetails_check_query);
        $userdetails = mysqli_fetch_assoc($result);
        
        if ($userdetails){
            if ($userdetails['username']===$username){
                array_push($errors, "Same username.");
                echo "Username already exists.<br>"; 
            }
            if ($userdetails['email']===$email){
                array_push($errors, "Same email.");
                echo "Email already exists.<br>"; 
            }
        }
    

    if(count($errors) == 0){
        $stmt = $conn->prepare("insert into user_details(firstName, lastName, username, email, password) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss",$firstname, $lastname, $username, $email, $password_1);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        echo "<script>alert('registeration successful')</script>";
        header("location:Login.php");
    }
    else{
        echo "<script>alert ('registeration unsuccessful')</script>";
    }
}
?>  