<!DOCTYPE html>
<html>

<head>
    <style>
    body {
    background-color: rgb(102, 255, 102);
}
    </style>
 
    <?php include './shared/Head.php'; ?>
    <link rel="stylesheet" href="../css/appointment.css">
</head>

<body>

    <?php include './shared/Header.php'; ?>

    <!-- <h1>Vaccination Portal Regitration</h1> -->
    <h2 style="text-align: center; margin-right: 1%;">Vaccination Portal Regitration</h2>

    <div style="text-align: center; margin-top: 30px; margin-bottom: 45%;">
        <div class="col-8" style="left: 22%; position: absolute;">
            <div class="card-appointment card-download">
                <div class="container">
                    <img src="../images/vaccination.png" alt="Certificate" class="card-image" style="margin-top: 1%; margin-left: 30%;">
                    <button class="button-sm" style="float: right; margin-top: 1%;" id="btnView">VIEW APPOINTMENTS</button>
                    <p style="font-weight: 600; font-size: 92%; text-align: left; margin-left: 5%;">This is the official vaccination program registration portal.
                        <br />No payment is required for the registration process.
                        <br />If you are unable to come to the official day of the vaccination your can book your vaccination for the available time slots.
                        <br />You can also get the update details about the vaccination programs via receiving notifications through your phone number and to your mail address. (There is a notifications enabling tool)
                        <br />For the furthermore details and to know about other vaccination details <a href="#">Click here</a>
                        <br />To start your vaccination process <a href="#">Click here</a>
                        <br />Now onwards the registration is open for 18 years and older.
                    </p>
                    <div style="text-align: left; margin-left: 5%;">
                        <label for="confirmation">Confirm you are 18 years or above</label>
                        <input type="checkbox" id="confirmation" name="confirmation" value="confirmation">
                    </div>
                    <button class="button blue" style="margin: 15px 0px 30px 0px" id="btnRegister">REGISTRATION TO VACCINATION</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/appointment.js"></script>

    <?php include './shared/Footer.php'; ?>
</body>

</html>