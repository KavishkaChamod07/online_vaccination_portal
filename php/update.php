<?php
$id = $_GET['Id'];
$fn = $_GET['firstName'];
$ln = $_GET['lastName'];
$un = $_GET['username'];
$em = $_GET['email'];
$pass = $_GET['password'];
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/Styles.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script src="../js/Script.js"></script>
        <title>Update</title>
      <style>

    .box {
        width: 450px;
        height: 600px;
        padding: 5px;
        margin: auto;
        background:  rgba(0, 0, 0, .4);
        border-radius: 20px;
        border: 5px solid #000000;
    }

    .box h2 {
        color: #ffffff;
        text-align: center;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .box label {
        margin-left: 20px;
        text-align: left;
        font-weight: bold;
        color: #e9e2e2;
    }

    .box input[type="number"],
    .box input[type="text"],
    .box input[type="password"],
    .box input[type="email"] {
        border: 0;
        background: none;
        background-color: transparent;
        display: block;
        margin: 5px auto;
        border: 3px solid #bbbbbb;
        padding: 1px 5px;
        width: 220px;
        height: 40px;
        outline: none;
        border-radius: 24px;
        transition: 0.25px;
        color: #ffffff;
        text-transform: none;
    }

    .box input[type="number"]:focus,
    .box input[type="text"]:focus,
    .box input[type="password"]:focus,
    .box input[type="email"]:focus {
        width: 220px;
        border: 3px solid #067b29ec;
        background-color: rgba(255, 255, 255, .8);
        color: #000000;
    }

    .box input[type="submit"] {
        border: 0;
        background: none;
        display: block;
        margin: 10px auto;
        text-align: center;
        border: 3px solid #0d0d0cec;
        padding: 10px 25px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25px;
        cursor: pointer;
    }

    .box input[type="submit"]:hover {
        background: #ffffffec;
        color: #000000;
        font-weight: 700;
    }
        </style>
    </head>
    <body>
        <br><br><br><br><br><br><br>
        <form class="box" action="" method="GET">
        <table border="0" align="center" cellspacing="20">
        <tr>
        <td><h2>Insert Details</h2></td>
        </tr>
        <tr>
        <td>ID</td>
        <td><input style="font-family: 'Font Awesome 5 free'; font-weight: 700; " type="number" name="Id"
                placeholder=" &#xf2c1; ID" value="<?php echo "$id" ?>"></td>            
        </tr>

        <tr>
        <td>First Name</td>
        <td><input style="font-family: 'Font Awesome 5 free'; font-weight: 700; " type="text" name="firstName"
                placeholder=" &#xf4ff; First" value="<?php echo "$fn" ?>" required></td>            
        </tr>

        <tr>
        <td>Last Name</td>
        <td><input style="font-family: 'Font Awesome 5 free'; font-weight: 700; " type="text" name="lastName"
                placeholder=" &#xf4ff; Last"  value="<?php echo "$ln" ?>"  required></td>            
        </tr>

        <tr>
        <td>Username</td>
        <td><input style="font-family: 'Font Awesome 5 free'; font-weight: 700; " type="text" name="username"
                placeholder=" &#xf007; username"  value="<?php echo "$un" ?>"  required></td>            
        </tr>

        <tr>
        <td>Email</td>
        <td><input style="font-family: 'Font Awesome 5 free'; font-weight: 700; " type="email" name="email"
                placeholder=" &#xf0e0; Email"  value="<?php echo "$em" ?>"  required></td>            
        </tr>

        <tr>
        <td>Password</td>
        <td><input style="font-family: 'Font Awesome 5 free'; font-weight: 700; " type="password" name="password"
                placeholder=" &#xf084; Password"  value="<?php echo "$pass" ?>"  required></td>            
        </tr>

        
        <tr>
        <td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Update Details" onclick=update()></a>
        </td>
        </tr>
</form>
</table>
    </body>
</html>
<?php

$con = new mysqli('localhost', 'root', '', 'vaccination_portal');
if($con->connect_error) {
    die('Connection Failed : ' .$con->connect_error);
}else {
if($_GET['submit']){
    $id = $_GET['Id'];
    $fn = $_GET['firstName'];
    $ln = $_GET['lastName'];
    $un = $_GET['username'];
    $em = $_GET['email'];
    $pass = $_GET['password'];
    //$userdetails_get_query = "SELECT * FROM userdetails";
    
    $userdetails_update_query = "UPDATE user_details SET Id = '$id', firstName = '$fn', lastName = '$ln', username = '$un', email = '$em', password = '$pass' WHERE Id = '$id'";
    $result = mysqli_query($con, $userdetails_update_query);
    
    if($result){
        echo "<script>alert('Record Updated')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost/online_vaccination_portal/php/View.php">
        <?php
        
    } else {
        echo "<script>alert('Failed')</script>";
    }
}    
}
?>




