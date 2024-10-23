<?php
require_once('./shared/Config.php');

$sql = "SELECT * FROM vaccination_updates";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        body{
    background-color: rgb(176, 224, 230);
        }
</style>

	<?php include './shared/Head.php'; ?>
    <link rel="stylesheet" href="../css/certification.css">
</head>

<body>
	<?php include './shared/Header.php'; ?>

	<h2 style="text-align: center">Vaccination Updates</h2>
    <div style="text-align: center; margin: 3% 0% 10% 5%; display: flex; justify-content: center;">

    <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
    ?>    
        <div class="col-3" style="margin-bottom: 5px; ">
            <div class="card-certificate card-download">
                <div class="container">
                    <img src="../images/newspaper.png" alt="Certificate" class="card-image">
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                    <a href="../reports/<?php echo $row['pdfUrl']; ?>" download="<?php echo $row['pdfUrl']; ?>" class="button blue" style="margin: 20px 0px 60px 0px">DOWNLOAD PDF</a>
                </div>
            </div>
        </div>

    <?php     
            }
        }
    ?>   

    </div>

	<?php include './shared/Footer.php'; ?>
</body>

</html>