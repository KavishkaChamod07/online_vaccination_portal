<!DOCTYPE html>
<html>
	<head>
	<style> body {
    background-color: rgb(112, 128, 144);
}
	</style>
	<?php include './shared/Head.php'; ?>
		<title> News </title> <!-- a -->
		<link rel="stylesheet" href="../css/STYLES_.css">
		<script src="../js/news.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style> 
			.block {
			background-color: MediumSeaGreen;
			border:#bbbbbb solid 3px;
			border-radius: 15px;
			color:#000000;
			font-size:35px;
			font-weight:500;
			}

			.block:first-child {
				margin-top: 40px;
			}

			.block:hover {
				background-color: rgb(0, 102, 102);
				border:#000000 solid 3px;
				color: #ffffff;
			}

			.btn3
			{
			display: inline-block;
			padding: 8px 12px;
			font-size: 12px;
			cursor: pointer;
			text-align: center;
			text-decoration: none;
			outline: none;
			color: #fff;
			background-color: green;
			border: none;
			border-radius: 15px;
			
			}
			a.btn3:hover, .btn2:active {
			background-color: red;
			}

			

		</style>
	</head>
	<body align = "center">
		<?php include './shared/Header.php'; ?>
		<div id ="div1">
		<button name="btn1" class="block"  onclick="loadData('btn1')"><span>How do vaccines work?</span></button><br>
		</div>
		
		<div id ="div2">
		<button name="btn2" class="block" onclick="loadData('btn2')"><span>How virtual reality could help reduce vaccine hesitancy</span></button><br>
		</div>
		
		<div id ="div3">
		<button name="btn3" class="block" onclick="loadData('btn3')"><span>A change to your diet could add years to your life expectancy - new study</span></button><br>
		</div>
		
		<div id ="div4">
		<button name="btn4" class="block"  onclick="loadData('btn4')"><span>6 new breakthroughs in the fight against cancer</span></button><br>
		</div>
		
		<br><br>
		<center><img id="phoneImg"></center>
		<p id="para" >	
		
		<div align="right" id ="div5">
		<button class ="btn3" onclick ="loadData('btn')"><a class="btn3" href ="news.php">BACK</a></button>
		</div>
		<?php include './shared/Footer.php'; ?>
</body>
</html>