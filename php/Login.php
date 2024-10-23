<!DOCTYPE html>
<html lang="en" and dir="Itr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/Styles.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="../js/Script.js"></script>
    <style>    
    .headline-1 {
        margin-top: 0px;
        background-color: #1D5C63;
        padding: 5px;
    }
    
    .headline-text {
        text-align: center;
        display: block;
        font-size: 1.3em;
        font-weight: bold;
        color: rgb(255, 255, 255);
    }
    
    .nav ul {
        list-style: none;
        background-color: #1A3C40;
        text-align: center;
        padding: 0;
        margin: 0;
    }
    
    .nav li {
        font-family: 'ABeeZee', sans-serif;
        font-size: 0.8em;
        line-height: 40px;
        height: 40px;
        border-bottom: 1px solid #888;
    }
    
    .nav a {
        text-decoration: none;
        color: rgb(255, 255, 255);
        display: block;
        transition: .3s background-color;
    }
    
    .nav a:hover {
        background-color: #005f5f;
    }
    
    .nav a.active {
        background-color: #EDE6DB;
        color: #444;
        cursor: default;
    }
    
    @media screen and (min-width: 600px) {
        .nav li {
            width: 140px;
            border-bottom: none;
            height: 50px;
            line-height: 50px;
            font-size: 0.9em;
        }
    
        /* Option 1 - Display Inline */
        .nav li {
            display: inline-block;
            margin-right: -4px;
        }
    }</style>
    <title>Login</title>
</head>

<body>
<div class="headline-1">
    <span class="headline-text">
        Online Vaccination Portal 
        <i class="fa fa-medkit" aria-hidden="true"></i>
        <a href="Sign Up.php"><i class="fa fa-user" style="float: right; margin: 0px 10px;"></i></a>
    </span>
</div>
<!-- <hr> -->
<header>
    <div class="nav">
        <ul id="main-menu">
            <li><a href="admin_home.php">Home</a></li>
        </ul>
    </div>
</header>
    <div class="boxSignIn">
        <form class="box" action="userLogin.php" method="post">
            <h2>Sign In to Your Account</h2>
            <label>Username</label>
            <input style="font-family: 'Font Awesome 5 free'; font-weight: 700;" type="text" name="username"
                placeholder=" &#xf007; Enter Username" id="username" required>
            <label>Password</label>
            <input style="font-family: 'Font Awesome 5 free'; font-weight: 700;" type="password" name="password"
                placeholder=" &#xf084; Enter password" id="password" required>
            <input type="submit" name="pass" value="login"></button>
        </form>
    </div>
    <p>Not registered yet? <a href="Sign Up.php">SignUp.</a></p>
   
    <div class="foot">
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>OVP</h4>
                        <ul>
                            <li><a href="admin_home.php">Home</a></li>
                            <li><a href="#">Vaccine</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">011234575/07112345678</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>About us</h4>
                        <ul>
                            <li><a href="#">Locations</a></li>
                            <li><a href="#">Contact info</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Follow us</h4>
                        <div class="sociallinks">
                            <ul>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></i></a>
                                <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></i></a>
                                <a href="https://github.com/"><i class="fab fa-github"></i></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p align="center">Online Vaccination Portal &copy; 2022</p>
        </footer>
    </div>
</body>
</html>