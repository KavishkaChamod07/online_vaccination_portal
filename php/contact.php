<!DOCTYPE html>

  <head>
  <?php include './shared/Head.php'; ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="../css/style.css" />
  <?php include './shared/Header.php'; ?>
    <div class="container">

      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's communicate.</h3>
          <p class="text">
         We'd be delighted to answer your questions and assist you 
		 in your endeavors. Please do not hesitate to contact us....</p>
          <p>National Department of Health</p>

          <div class="info">
            <div class="information">
              <img src="../images/location.png" class="icon" alt="" />
              <p>389,Negombo-Colombo Main RD,Wattala</p>
            </div>
            <div class="information">
              <img src="../images/email.png" class="icon" alt="" />
              <p>info@national_department</p>
            </div>
            <div class="information">
              <img src="../images/phone.png" class="icon" alt="" />
              <p>+41 22 909 6500</p>
            </div>
          </div>
           <br>
          
            <p>Connect with us :</p><br>
            <div class="social-icons">
              <a href="#">facebook</a><br>
              <a href="#">twitter</a><br>
              <a href="#">instagram</a><br>
              <a href="#">linkedin</a>
            </div>
        </div>
        <div class="contact-form">

          <form action="function.php" method="POST">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="Username" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="Email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="Phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="Message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="subbtn" />
          </form>
        </div>
      </div>
    </div>

    <script src="../js/app.js"></script>
    <?php include './shared/Footer.php'; ?>
  </body>
</html>
