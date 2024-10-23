<?php
include "./shared/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btnGetData'])) {
        $searchFaq = $_POST['searchFaq'];
        $sql = "SELECT * from faq WHERE question LIKE ". "'%" ."$searchFaq" . "%'";
        $result = $conn->query($sql);
    }
} else {
    $sql = "SELECT * from faq";
    $result = $conn->query($sql);
}

//$result = null;
?>

<!DOCTYPE html>
<html>

<head>
<style>
body {
    background-color: rgb(0, 191, 255);
}
</style>
    <?php include './shared/Head.php'; ?>
    <link rel="stylesheet" href="../css/faq.css">
</head>

<body>
    <?php include './shared/Header.php'; ?>
    <h2 style="text-align: center; margin-right: 1%;">How Can We Help You ?</h2>

    <div style="text-align: left; margin-top: 70px; margin-bottom: 8%;">
        <fieldset style="margin-top: -2.5%;">

            <form action="" method="POST">
                <div class="col-6" style="margin-left: 250px; margin-top: 15px;">
                    <input type="text" id="searchFaq" name="searchFaq" placeholder="Search FAQs" value="<?php if(isset($searchFaq)){ echo $searchFaq; } ?>" maxlength="100" autocomplete="off"/>
                </div>
                <div class="col-2" style="margin-left: 10px; margin-top: 15px;">
                    <input type="submit" class="button-sm blue" id="btnGetData" name="btnGetData" value="SEARCH"/>
                </div>
            </form>
            <div class="box" style="margin-top: 100px;">
                <p class="heading">FAQs</p>
                <div class="faqs">
                    <?php
                    if ($result != null) {
                        if ($result->num_rows != null) {
                            while ($row = $result->fetch_assoc()) {
                    ?>
                                <details>
                                    <summary><?php echo $row['question']; ?></summary>
                                    <p class="text"><?php echo $row['answer']; ?></p>
                                </details>
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </fieldset>
    </div>

    <?php include './shared/Footer.php'; ?>
</body>

</html>