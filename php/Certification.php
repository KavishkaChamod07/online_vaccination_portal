<!DOCTYPE html>
<html>

<head>
<style>
    
    body {
    background-color: rgb(102, 102, 255);
}

</style>
    <?php include './shared/Head.php'; ?>
    <link rel="stylesheet" href="../css/certification.css">
</head>

<body class ="image">

    <?php include './shared/Header.php'; ?>

    <h2 style="text-align: center; margin-top: 2%;">Digital Vaccination Certificate Portal</h2>

    <div style="text-align: center; margin-top: 3%; margin-bottom: 36%;">
        <div class="col-6" style="left: 5%; position: absolute;">
            <div class="card-certificate card-download">
                <div class="container">
                    <img src="../images/certificate.png" alt="Certificate" class="card-image">
                    <h5>Issuing vaccination certificates</h5>
                    <button class="button blue" style="margin: 20px 0px 60px 0px" id="btnIssue">CERTIFICATE ISSUE</button>
                </div>
            </div>
        </div>
        <div class="col-6" style="left: 55%; position: absolute;">
            <div class="card-certificate card-validate">
                <div class="container">
                    <img src="../images/validate.png" alt="Certificate" class="card-image">
                    <h5>Validate a Vaccination Certificate</h5>
                    <button class="button" style="margin: 20px 0px 60px 0px" id="btnValidate">VALIDATE</button>
                </div>
            </div>
        </div>
    </div>

    <?php include './shared/Footer.php'; ?>
    <script src="../js/certification.js"></script>
</body>

</html>