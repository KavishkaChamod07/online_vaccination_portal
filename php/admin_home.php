<html>
	<head>
	 
	
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
	
<body style = "background-color:rgb(102, 255, 102)";>
<div class="headline-1">
    <span class="headline-text">
        Online Vaccination Portal 
        <i class="fa fa-medkit" aria-hidden="true"></i>
        <a href ="Login.php"> <i class="fa fa-sign-in" style="float: right; margin: 0px 10px;"></i> </a>
        <i class="fa fa-user" style="float: right; margin: 0px 10px;"></i>
    </span>
</div>
<!-- <hr> -->
<header>
    <div class="nav">
        <ul id="main-menu">
            <li><a href="admin_home.php">Home</a></li>
            <li><a href="#">Appointment</a></li>
            <li><a href="#">Certification</a></li>
            <li><a href="#">Vaccination Updates</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">FAQ</a></li>
        </ul>
    </div>
</header>

<div align ="right">
     <button class ="btn1" onclick ="loadData('btn')">GET YOUR VACCINE CERTIFICATE</button>
   </div>
   


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://media.istockphoto.com/photos/pharmaceutical-industry-production-line-picture-id1322464926?k=20&m=1322464926&s=612x612&w=0&h=wO_PQ3dcaA3hDANM7xX4DWIsstmAtn-8IHxUyCAiTzU=" style="width:100%">
  <div class="text">WE ALREADY HAVE NEW VACCINATION STOCKS</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://media.istockphoto.com/photos/hospital-ward-unrecognizable-head-nurse-doctor-surgeon-uses-digital-picture-id1353357410?k=20&m=1353357410&s=612x612&w=0&h=5f_k7qd54Uid6D-ZPcNoQriXDbdgY5MHF8Pcg0HRSG0=" style="width:100%">
  <div class="text">WE USE NEW TECHNOLOGY FOR GIVE YOU A BETTER SERVICE</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://media.istockphoto.com/photos/senior-adult-man-getting-vaccinated-in-doctors-office-picture-id1299308834?k=20&m=1299308834&s=612x612&w=0&h=6JkmpcYQepNVcOzlE0V0TI0749x0TWlhdeyzbIr-k2I=" style="width:90%">
  <div class="text">GET YOUR VACCINE, HURRY UP!</div>
</div>

</div>
<br> 
    
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

 <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); 
}
</script>   
    
 
        </div>
    <button class ="btn1" onclick ="loadData('btn')"><a class="btn1" href ="View.php">VIEW USER DETAILS</a></button>
   
   <hr style="height:2px;border-width:0;color:gray;background-color:gray">
   <footer class="footer-distributed">

    <div class="footer-right">
        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>
    </div>

    <div class="footer-left">
        <p class="footer-links">
            <a href="index.php">Home</a>
            <a href="#">Contact</a>
            <a href="#">About</a>
            <a href="#">FAQ</a>
        </p>
        <p>Online Vaccination Portal &copy; 2022</p>
    </div>

</footer>
</body>

</html>