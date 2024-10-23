<?php 
require_once('./shared/Config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['validate'])) {
        $certificateNo = $_POST['certificateNo'];

        $query="SELECT * from certificate WHERE certificateNo = '" . $certificateNo . "'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {   
            while ($row = $result->fetch_assoc()) {
				$certificateNo = $row['certificateNo'];
                $nic = $row['nic'];
                $fullName = $row['fullName'];
                $address = $row['address'];
                $gender = $row['gender'];
				$noOfDose = $row['noOfDose'];
				$firstDose = $row['firstDose'];
				$secondDose = $row['secondDose'];
				$thirdDose = $row['thirdDose'];
				$fourthDose = $row['fourthDose'];
				$issuedDate = $row['issuedDate'];
            }
         }
         else{
            echo "<script type='text/javascript'>alert('Invalid certificate no.');</script>";
         }
    }
    else if (isset($_POST['download'])) {

		$certificateNo = $_POST['certificateNo'];
        $nic = $_POST['nic'];
        $noOfDose = $_POST['noOfDose'];
        $firstDose = $_POST['firstDose'];
        $secondDose = isset($_POST['secondDose']) ? $_POST['secondDose'] : "";
        $thirdDose = isset($_POST['thirdDose']) ? $_POST['thirdDose'] : "";
        $fourthDose = isset($_POST['fourthDose']) ? $_POST['fourthDose'] : "";
        $issuedDate = $_POST['issuedDate'];
        $fullName = $_POST['fullName'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];

        require_once('./shared/CertifivateCreate.php');
    }
  }
?>

<!DOCTYPE html>
<html>

<head>
<style>
body {
    background-color: rgb(95, 158, 160);
}
</style>
	<?php include './shared/Head.php'; ?>
</head>

<body>
	<?php include './shared/Header.php'; ?>

	<h2 style="text-align: center">Vaccination Certificate Validation</h2>

	<div style="margin: 1% 2% 5% 2%">
		<fieldset>
			<form method="POST">
				<div style=" display: flex; justify-content: center;">
					<div class="col-8" style="margin-top: 10px">
						<label for="certificateNo">Certificate No.</label>
						<input type="text" id="certificateNo" name="certificateNo" placeholder="Certificate No.." value="<?php if(isset($certificateNo)){ echo $certificateNo; } ?>"  required>
					</div>
					<div class="col-4" style="margin-top: 10px; margin-left: 1vw">
						<input type="submit" value="VALIDATE" style="margin-top: 4.5vh; background-color: blue; width: 10vw;" name="validate">
					</div>
				</div>

				<div style="display: flex; justify-content: center;">
					<div class="col-12">
						<label for="fullName" style="margin-top: 10px;">Full Name</label>
						<input type="text" id="fullName" name="fullName" value="<?php if(isset($fullName)){ echo $fullName; } ?>" readonly class="readonly">
					</div>
				</div>

				<div style="display: flex; justify-content: center;">
					<div class="col-6">
						<label for="nic" style="margin-top: 10px;">NIC</label>
						<input type="text" id="nic" name="nic" value="<?php if(isset($nic)){ echo $nic; } ?>" readonly class="readonly">
					</div>
                    <div class="col-3" style="margin-left: 1vw">
						<label for="gender" style="margin-top: 10px;">Gender</label>
						<input type="text" id="gender" name="gender" value="<?php if(isset($gender)){ echo $gender; } ?>" readonly class="readonly">
					</div>
					<div class="col-3" style="margin-left: 1vw">
						<label for="issuedDate" style="margin-top: 10px;">Issued Date</label>
						<input type="text" id="issuedDate" name="issuedDate" value="<?php if(isset($issuedDate)){ echo $issuedDate; } ?>" readonly class="readonly">
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

				<div style=" display: flex; justify-content: left;">
					<div class="col-3" style="margin-right: 7px;">
						<label for="firstDose" style="margin-top: 10px;">First Dose</label>
						<input type="text" id="firstDose" name="firstDose" value="<?php if(isset($firstDose)){ echo $firstDose; } ?>" readonly class="readonly">
					</div>
					<div class="col-3" style="margin-right: 7px;">
						<label for="secondDose" style="margin-top: 10px;">Second Dose</label>
						<input type="text" id="secondDose" name="secondDose" value="<?php if(isset($secondDose)){ echo $secondDose; } ?>" readonly class="readonly">
					</div>
					<div class="col-3" style="margin-right: 7px;">
						<label for="thirdDose" style="margin-top: 10px;">Third Dose</label>
						<input type="text" id="thirdDose" name="thirdDose" value="<?php if(isset($thirdDose)){ echo $thirdDose; } ?>" readonly class="readonly">
					</div>
					<div class="col-3">
						<label for="fourthDose" style="margin-top: 10px;">Fourth Dose</label>
						<input type="text" id="fourthDose" name="fourthDose" value="<?php if(isset($fourthDose)){ echo $fourthDose; } ?>" readonly class="readonly">
					</div>
				</div>

				<div style=" display: flex; justify-content: start;">
					<!-- <div class="col-4">
						<input type="submit" value="DOWNLOAD CERTIFICATE" name="download" onclick="return formValidation();">
					</div> -->
				</div>

			</form>
		</fieldset>
	</div>

	<?php include './shared/Footer.php'; ?>
	<script src="../js/certificateValidate.js"></script>
</body>

</html>