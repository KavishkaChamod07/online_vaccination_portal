<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/Styles.css" />
        <title>Display</title>
        <style>
                .table {
                    border-collapse: collapse;
                    margin: 25px 0;
                    min-width: 400px;
                    
    }
   .table th {
       background-color: rgba(0, 152, 121, 0.8);
       text-align: center;
       color: #000000;
   }
   .table td {
        background-color: rgba(187, 187, 187, 0.3);
        color: #000000;
       text-align: center;
   }
   .upbtn{
       background-color: #00ff00;
       color: #ffffff;
       border-radius: 5px;
       border: 1px solid #25c425;

   }
   .delbtn{
       background-color: #ff0000;
       color: #ffffff;
       border-radius: 5px;
       border: 1px solid #e01414;

   }

        </style>
</head>
<body>
    <table border = "1" class = "table">
        <tr>
            <th>Id</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th colspan = "2">operation</th>
        </tr>
<?php 
$con = new mysqli ('localhost', 'root', '', 'vaccination_portal');
if($con->connect_error) {
    die('Connection Failed : ' .$con->connect_error);
}else {

    $userdetails_get_query = "SELECT * FROM user_details";
    $result = mysqli_query($con, $userdetails_get_query);
    $total = mysqli_num_rows($result);
    if($total != 0){
    while($userdetails = mysqli_fetch_assoc($result)){
        echo "
        <tr>
        <td>".$userdetails['Id']."</td>
        <td>".$userdetails['firstName']."</td>
        <td>".$userdetails['lastName']."</td>
        <td>".$userdetails['username']."</td>
        <td>".$userdetails['email']."</td>
        <td>".$userdetails['password']."</td>
        <td><a href = 'update.php?Id=$userdetails[Id] & firstName=$userdetails[firstName] & lastName=$userdetails[lastName] & username=$userdetails[username] & 
        email=$userdetails[email] & password=$userdetails[password]'><input type='submit' value='Edit/Update' class='upbtn'></a></td>
        <td><a href = 'delete.php?Id=$userdetails[Id]'><input type='submit' value='Delete' class='delbtn'></a></td>
    </tr>
        ";
    }
} else {
    echo"Records not found";
}
}
    
?>
</table>
</body>
