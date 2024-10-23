<?php 
require_once('./shared/Config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['load'])) {
        $nic = $_POST['nic'];

        $query="SELECT * from user_appointment WHERE nic = '" . $nic . "'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {   
            $noOfDose = $result->num_rows;
            while ($row = $result->fetch_assoc()) {
                $nic = $row['nic'];
                $fullName = $row['firstName']." ".$row['lastName'];
                $address = $row['address1'].", ".$row['address2'].", ".$row['city'];
                $gender = $row['gender'];

            }
         }
         else{
            echo "<script type='text/javascript'>alert('No data found');</script>";
         }
    }
    else if (isset($_POST['save'])) {
        // $message = $_POST['address'];
        // echo "<script type='text/javascript'>alert('$message');</script>";
        $certificateNo = "CERT"."".$_SERVER['REQUEST_TIME'];
        $nic = $_POST['nic'];
        $noOfDose = $_POST['noOfDose'];
        $firstDose = $_POST['firstDose'];
        $secondDose = isset($_POST['secondDose']) ? $_POST['secondDose'] : "";
        $thirdDose = isset($_POST['thirdDose']) ? $_POST['thirdDose'] : "";
        $fourthDose = isset($_POST['fourthDose']) ? $_POST['fourthDose'] : "";
        $issuedDate = date("Y/m/d");
        $fullName = $_POST['fullName'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
    
        $sqlGet = "SELECT * FROM certificate WHERE nic = '" . $nic . "'";
        $resultGet = $conn->query($sqlGet);
        if ($resultGet->num_rows > 0) {
            echo "<script type='text/javascript'>alert('The certificate has already been issued.');</script>";
        }
        else{
            $sqlSave = "INSERT INTO `certificate`(`certificateNo`, `nic`, `noOfDose`, `firstDose`, `secondDose`, `thirdDose`, `fourthDose`, `issuedDate`, `fullName`, `address`, `gender`) VALUES ('$certificateNo','$nic','$noOfDose','$firstDose','$secondDose', '$thirdDose', '$fourthDose', '$issuedDate', '$fullName', '$address', '$gender')";
            $resultSave = $conn->query($sqlSave);
        
            if ($resultSave == TRUE) {
            //   echo "<script type='text/javascript'>alert('Certificate issued successfully.');</script>";
            }else{
              echo "Error:". $sqlSave . "<br>". $conn->error;
            } 
        
            $conn->close(); 
    
            require_once('./shared/CertifivateCreate.php');
        }
    }
  }
?>

<!DOCTYPE html>
<html>

<head>
<style>
body {
    background-color: rgb(154, 205, 50);
}
</style>
<?php include './shared/Head.php'; ?>
</head>
	
<body>
	<?php include './shared/Header.php'; ?>

	<h2 style="text-align: center">Certificate Issue</h2>

    <div style="margin: 1% 2% 5% 2%">
		<fieldset>
			<form method="POST" > 
				<div style=" display: flex; justify-content: center;">
					<div class="col-8" style="margin-top: 10px">
						<label for="nic">NIC</label>
						<input type="text" id="nic" name="nic" placeholder="NIC" value="<?php if(isset($nic)){ echo $nic; } ?>" required>
					</div>
                    <div class="col-4" style="margin-top: 10px; margin-left: 1vw">
                        <input type="submit" value="LOAD DATA" 
                            style="margin-top: 4.5vh; background-color: blue; width: 10vw;" name="load"
                        >
                        <!-- <button class="button blue" style="margin-top: 4vh" id="btnValidate">VALIDATE</button> -->
					</div>
				</div>

				<div style="display: flex; justify-content: center;">
					<div class="col-10">
						<label for="fullName" style="margin-top: 10px;">Full Name</label>
						<input type="text" id="fullName" name="fullName" value="<?php if(isset($fullName)){ echo $fullName; } ?>" readonly class="readonly">
					</div>
                    <div class="col-2" style="margin-left: 1vw">
						<label for="gender" style="margin-top: 10px;">Gender</label>
						<input type="text" id="gender" name="gender" value="<?php if(isset($gender)){ echo $gender; } ?>" readonly class="readonly">
					</div>
				</div>

				<div style=" display: flex; justify-content: center;">
					<div class="col-12">
						<label for="address" style="margin-top: 10px;">Address</label>
						<input type="text" id="address" name="address" value="<?php if(isset($address)){ echo $address; } ?>" readonly class="readonly">
					</div>
				</div>

                <div style=" display: flex; justify-content: left;">
					<div class="col-3">
						<label for="noOfDose" style="margin-top: 10px;">No of Dose</label>
						<input type="text" id="noOfDose" name="noOfDose" value="<?php if(isset($noOfDose)){ echo $noOfDose; } ?>" readonly class="readonly">
					</div>
				</div>

                <div style=" display: flex; justify-content: center; margin-bottom: 20px;">
                    <div class="col-3" style="margin-right: 7px;">
                        <label for="firstDose">First Dose</label>
                        <select name="firstDose" id="firstDose"
                            <?php 
                                if(!isset($noOfDose)){ 
                                    echo " disabled ";
                                }
                            ?>
                        >
                            <option value="default">Select Vaccine</option>
                            <option value="Moderna">Moderna</option>
                            <option value="Pfizer">Pfizer</option>
                            <option value="SputnikV">Sputnik V</option>
                            <option value="AstraZeneca">AstraZeneca</option>
                            <option value="Covishield">Covishield</option>
                            <option value="Sinopharm">Sinopharm</option>
                            <option value="Sinovac">Sinovac</option>
                        </select>
                    </div>

                    <div class="col-3" style="margin-right: 7px;">
                        <label for="secondDose">Second Dose</label>
                        <select name="secondDose" id="secondDose"
                            <?php 
                                if(isset($noOfDose)){ 
                                    if($noOfDose == 1){
                                        echo " disabled ";
                                    }
                                } else echo " disabled ";
                            ?>
                        >
                            <option value="default">Select Vaccine</option>
                            <option value="Moderna">Moderna</option>
                            <option value="Pfizer">Pfizer</option>
                            <option value="SputnikV">Sputnik V</option>
                            <option value="AstraZeneca">AstraZeneca</option>
                            <option value="Covishield">Covishield</option>
                            <option value="Sinopharm">Sinopharm</option>
                            <option value="Sinovac">Sinovac</option>
                        </select>
                    </div>

                    <div class="col-3" style="margin-right: 7px;">
                        <label for="thirdDose">Third Dose</label>
                        <select name="thirdDose" id="thirdDose"
                            <?php 
                                if(isset($noOfDose)){ 
                                    if($noOfDose == 1 || $noOfDose == 2){
                                        echo " disabled ";
                                    }
                                } else echo " disabled ";
                            ?>
                        >
                            <option value="default">Select Vaccine</option>
                            <option value="Moderna">Moderna</option>
                            <option value="Pfizer">Pfizer</option>
                            <option value="SputnikV">Sputnik V</option>
                            <option value="AstraZeneca">AstraZeneca</option>
                            <option value="Covishield">Covishield</option>
                            <option value="Sinopharm">Sinopharm</option>
                            <option value="Sinovac">Sinovac</option>
                        </select>
                    </div>

                    <div class="col-3">
                        <label for="fourthDose">Fourth Dose</label>
                        <select name="fourthDose" id="fourthDose"
                            <?php 
                                if(isset($noOfDose)){ 
                                    if($noOfDose != 4){
                                        echo " disabled ";
                                    }
                                } else echo " disabled ";
                            ?>
                        >
                            <option value="default">Select Vaccine</option>
                            <option value="Moderna">Moderna</option>
                            <option value="Pfizer">Pfizer</option>
                            <option value="SputnikV">Sputnik V</option>
                            <option value="AstraZeneca">AstraZeneca</option>
                            <option value="Covishield">Covishield</option>
                            <option value="Sinopharm">Sinopharm</option>
                            <option value="Sinovac">Sinovac</option>
                        </select>
                    </div>
				</div>

				<div style=" display: flex; justify-content: center;">
					<div class="col-4">
						<input type="submit" value="SUBMIT" name="save" onclick="return formValidation();">
					</div>
				</div>

			</form>
		</fieldset>
	</div>

	<?php include './shared/Footer.php'; ?>
    <script src="../js/certificateIssue.js"></script>
</body>

</html>