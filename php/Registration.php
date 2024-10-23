<?php
include "./shared/config.php";

if (isset($_POST['submit'])) {
    $nic = $_POST['nic'];
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $country = $_POST['country'];
    $postalCode = $_POST['postalCode'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $phoneNo = $_POST['phone'];
    $email = $_POST['email'];
    $nationality = $_POST['nationality'];
    $profession = $_POST['profession'];
    $dose = $_POST['doseNo'];
    $appointmentDate = $_POST['appointmentDate'];

    $sql = "INSERT INTO `user_appointment`(`nic`, `firstname`, `lastName`, `address1`, `address2`, `city`, `province`, `country`, `postalCode`, `gender`, `age`, `phoneNo`, `email`, `nationality`, `profession`, `dose`, `appointmentDate`) 
            VALUES ('$nic', '$firstName', '$lastName', '$address1', '$address2', '$city', '$province', '$country', '$postalCode', '$gender', '$age', '$phoneNo', '$email', '$nationality', '$profession', '$dose', '$appointmentDate')";

    $result = $conn->query($sql);
    if ($result == TRUE) {
        $message = "New appointment created successfully.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        $message = "Error:" . $sql . "<br>" . $conn->error;
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    //$conn->close();
    // echo "<script type='text/javascript'>alert('Test');</script>";

}

?>

<!DOCTYPE html>
<html>

<head>
    <?php include './shared/Head.php'; ?>
    <style>
    body {
    background-color: rgb(192, 192, 192);
}
    </style>
</head>

<body>
    <?php include './shared/Header.php'; ?>

    <div>
        <h2 style="text-align: center; margin-top: 2%;">Appointment Registration Form</h2>
        <div style="text-align: left; margin-top: 70px; margin-bottom: 5%;">

            <fieldset style="margin-top: -2.5%;">
                <form method="POST" onSubmit="return fnRegistrationValidate();">
                    <div style="display: flex; justify-content: center;">
                        <div class="col-4" style="margin-right: 6px;">
                            <label for="nic">NIC No.</label>
                            <input type="text" id="nic" name="nic" placeholder="NIC" autocomplete="off" maxlength="10" />
                        </div>
                        <div class="col-4" style="margin-right: 6px;">
                            <label for="fName">First Name</label>
                            <input type="text" id="fName" name="fName" placeholder="First Name" autocomplete="off" />
                        </div>
                        <div class="col-4">
                            <label for="lName">Last Name</label>
                            <input type="text" id="lName" name="lName" placeholder="Last Name" autocomplete="off" />
                        </div>
                    </div>
                    <div style="display: flex; justify-content: start;">
                        <div class="col-6" style="margin-right: 20px;">
                            <label for="address1">Street Address 1</label>
                            <input type="text" id="address1" name="address1" placeholder="Street Address 1" autocomplete="off" />
                        </div>

                    </div>
                    <div style="display: flex; justify-content: start;">
                        <div class="col-6" style="margin-right: 500px;">
                            <label for="address2">Street Address 2</label>
                            <input type="text" id="address2" name="address2" placeholder="Street Address 2" autocomplete="off" />
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <div class="col-3" style="margin-right: 6px;">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" placeholder="City" autocomplete="off" />
                        </div>
                        <div class="col-3" style="margin-right: 6px;">
                            <label for="province">Province</label>
                            <input type="text" id="province" name="province" placeholder="Province" autocomplete="off" />
                        </div>
                        <div class="col-3" style="margin-right: 6px;">
                            <label for="country">Country</label>
                            <input type="text" id="country" name="country" placeholder="Country" autocomplete="off" />
                        </div>
                        <div class="col-3">
                            <label for="postalCode">Postal Code</label>
                            <input type="text" id="postalCode" name="postalCode" placeholder="Postal Code" autocomplete="off" />
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <div class="col-3" style="margin-right: 6px;">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender">
                                <option value="default">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-3" style="margin-right: 6px;">
                            <label for="age">Age</label>
                            <input type="number" id="age" name="age" placeholder="Age" autocomplete="off" />
                        </div>
                        <div class="col-3" style="margin-right: 6px;">
                            <label for="phone">Phone No.</label>
                            <input type="text" id="phone" name="phone" placeholder="Phone No." autocomplete="off" maxlength="10"/>
                        </div>
                        <div class="col-3">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" autocomplete="off" />
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <div class="col-3" style="margin-right: 6px;">
                            <label for="nationality">Nationality</label>
                            <input type="text" id="nationality" name="nationality" placeholder="Nationality" autocomplete="off" />
                        </div>
                        <div class="col-3" style="margin-right: 6px;">
                            <label for="profession">Profession</label>
                            <input type="text" id="profession" name="profession" placeholder="Profession" autocomplete="off" />
                        </div>
                        <div class="col-3" style="margin-right: 6px;">
                            <label for="doseNo">Dose No.</label>
                            <input type="text" id="doseNo" name="doseNo" placeholder="Dose No." autocomplete="off" />
                        </div>
                        <div class="col-3">
                            <label for="appointmentDate">Appoinment Date</label>
                            <input type="date" id="appointmentDate" name="appointmentDate" placeholder="Appoinment Date" />
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <div class="col-3">
                            <input type="submit" name="submit" value="SUBMIT">
                        </div>
                    </div>

                </form>

            </fieldset>

        </div>
    </div>

    <script src="../js/registration.js"></script>
    <?php include './shared/Footer.php'; ?>
</body>

</html>