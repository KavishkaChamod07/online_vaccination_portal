<?php
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $message = $_POST['Message'];
    
    
 
    $conn = new mysqli('localhost', 'root', '', 'vaccination_portal');
    if($conn->connect_error){
        die('Connection Failed :' .$conn->connection_error);
    }else{
        
        $stmt = $conn->prepare("insert into contact(Username,Email,Phone,Message) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $email, $phone, $message);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("location:contact.php");
    
    
}
?>  