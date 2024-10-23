<?php
include "./shared/config.php";

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['btnGetData'])) {
        $viewNic = $_POST['viewNic'];
        $sql = "SELECT * from user_appointment WHERE nic = '$viewNic'";
        $result = $conn->query($sql);
    } else if (isset($_POST['btnUpdate'])) {
        $id = $_POST['modalAppointmentId'];
        $date = $_POST['modalAppointmentDate'];
        $sql = "UPDATE user_appointment SET appointmentDate = '$date' WHERE appointmentId = '$id'";
        $result = $conn->query($sql);

        if ($result == TRUE) {
            $message = "Appointment updated successfully.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message = "Error:" . $sql . "<br>" . $conn->error;
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        $result = null;
    } else {
        $id = $_POST['modalAppointmentId'];
        $sql = "DELETE FROM user_appointment WHERE appointmentId = '$id'";
        $result = $conn->query($sql);

        if ($result == TRUE) {
            $message = "Appointment deleted successfully.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message = "Error:" . $sql . "<br>" . $conn->error;
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        $result = null;
    }
}

?>
<!DOCTYPE html>
<html>

<head>
<style>
body {
    background-color: rgb(0, 128, 128);
}
</style>
    <?php include './shared/Head.php'; ?>
    <link rel="stylesheet" href="../css/appointment.css">
</head>

<body>
    <?php include './shared/Header.php'; ?>

    <h2 style="text-align: center; margin-top: 2%;">View Appointments</h2>
    <div style="text-align: left; margin-top: 70px; margin-bottom: 18%;">
        <fieldset style="margin-top: -2.5%;">
            <legend>Appointment Details</legend>

            <form action="" method="POST">
                <div class="col-3" style="margin-right: 7px;">
                    <label for="viewNic">NIC No.</label>
                    <input type="text" id="viewNic" name="viewNic" placeholder="Enter NIC No." maxlength="10" autocomplete="off" value="<?php if (isset($viewNic)) {
                                                                                                                                            echo $viewNic;
                                                                                                                                        } ?>" />
                    <input type="submit" class="button-sm blue" id="btnGetData" name="btnGetData" />
                </div>
                <div class="col-12" style="margin: 20px 5px 5px 5px;">
                    <table id="appointments" style="width: 99%;">
                        <thead>
                            <tr>
                                <th>Appointment Id</th>
                                <th>NIC No.</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Dose No.</th>
                                <th>Appointment Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result != null) {
                                if ($result->num_rows != null) {
                                    while ($row = $result->fetch_assoc()) {
                            ?>
                                        <tr>
                                            <td><?php echo $row['appointmentId']; ?></td>
                                            <td><?php echo $row['nic']; ?></td>
                                            <td><?php echo $row['firstName'], ' ', $row['lastName']; ?></td>
                                            <td><?php echo $row['city']; ?></td>
                                            <td><?php echo $row['gender']; ?></td>
                                            <td><?php echo $row['dose']; ?></td>
                                            <td><?php echo $row['appointmentDate']; ?></td>
                                        </tr>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                <button id="myBtn" hidden>Open Modal</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2 style="text-align: center; margin-top: 2%;">Reshedule / Remove the appointment</h2>
                        <div style="text-align: left; margin-top: 70px; margin-bottom: 5%;">
                            <fieldset style="margin-top: -2.5%;">
                                <div style="display: flex; justify-content: start;">
                                    <div class="col-6">
                                        <label for="modalAppointmentId">Appointment Id</label>
                                        <input type="text" id="modalAppointmentId" name="modalAppointmentId" readonly="readonly" />
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: center;">
                                    <div class="col-6" style="margin-right: 5px;">
                                        <label for="modalNic">NIC No.</label>
                                        <input type="text" id="modalNic" name="modalNic" disabled />
                                    </div>
                                    <div class="col-6">
                                        <label for="modalName">Name</label>
                                        <input type="text" id="modalName" name="modalName" disabled />
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: center;">
                                    <div class="col-6" style="margin-right: 5px;">
                                        <label for="modalDoseNo">Dose No.</label>
                                        <input type="text" id="modalDoseNo" name="modalDoseNo" disabled />
                                    </div>
                                    <div class="col-6">
                                        <label for="modalAppointmentDate">Appointment Date</label>
                                        <input type="date" id="modalAppointmentDate" name="modalAppointmentDate" />
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: center;">
                                    <div class="col-6" style="margin-right: 5px;">
                                        <input type="submit" class="button-sm red" id="btnDelete" name="btnDelete" value="DELETE" style="width: 100%;">
                                    </div>
                                    <div class="col-6">
                                        <input type="submit" class="button-sm green" id="btnUpdate" name="btnUpdate" value="UPDATE" style="width: 100%;">
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                    </div>

                </div>
            </form>


        </fieldset>
    </div>


    <script src="../js/viewAppointment.js"></script>
    <?php include './shared/Footer.php'; ?>
</body>

</html>