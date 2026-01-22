<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <title>Contact Us for Expert Maritime Training Guidance – Sea Career</title>
  <meta name="description" content="Connect with us at Sea Career Consultancy & Training to commence on a journey towards excellence in maritime training.">
  <link rel="canonical" href="https://seacareer.co.in/contact.php"/>
  <?php include './link.php';?>
</head>

<body>

  <?php include "header.php"; ?>

  <div class="about sectiontitle">
    <div class="container">
      <div class="row">
        <h1 class="aboutsection">Contact Us</h1>
        <p class="topsection"><a href="index.php" class="innersection">Home &nbsp;</a>-<a href="contact.php" class="innersection"> &nbsp;Contact</a></p>
      </div>
    </div>
  </div>
  <div class="contactsection">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
          <div class="details">
            <h3 class="contact_left">Contact Us</h3>
            <h2 class="contact_get">Get In Touch !</h2>
            <p class="contactinfo"><i class="fa-solid fa-location-dot"></i>&nbsp;217-B Wing, Second Floor, Plot No-44 Sai Chamber,
              Sector-11, CBD Belapur(East)</p>
            <p class="contactright"><i class="fa-solid fa-envelope"></i> &nbsp;seacarrierconsultancy@gmail.com</p>
            <p class="contactright"><i class="fa-solid fa-phone"></i> &nbsp;+91 8452055999</p>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">


          <form class="row g-3 " method="post">
            <div class="col-md-12">

              <label for="inputname validationTooltip01" class="form-label contacttitle">Name <span class="requireds">*</span></label>
              <input type="text" class="form-control formss " id="inputname validationTooltip01" name="cname" autocomplete="off" required>

            </div>
            <div class="col-md-12">

              <label for="inputemail validationTooltip02 " class="form-label contacttitles">Email <span class="requireds">*</span></label>
              <input type="email" class="form-control formss" id="inputemail validationTooltip02" name="cemail" autocomplete="off" required>


            </div>

            <div class="col-12">
              <label for="inputmob validationTooltip03" class="form-label contacttitles">Mobile <span class="requireds">*</span></label>
              <input type="number" class="form-control formss" id="inputmob validationTooltip03" name="cmob" autocomplete="off" required>

            </div>

            <div class="col-md-12">
              <label for="exampleFormControlTextarea1 validationTooltip04" class="form-label contacttitles">Message <span class="requireds">*</span></label>
              <textarea class="form-control formss" id="exampleFormControlTextarea1 validationTooltip04" rows="5" name="cmsg" required></textarea>

            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-outline-success  btn-lg" name="send">Submit</button>
            </div>
          </form>

        </div>



      </div>
    </div>
  </div>

  <div class="map">
    <div class="container-fluid">
      <div class="row mt-5 mb-5">
        <div class="col-12 maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30175.987842377126!2d73.02333676363985!3d19.01978863211724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c252fe17a561%3A0xa9c5235c8b6d26de!2sCBD%20Belapur%2C%20Navi%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1692350483339!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="icons">
    <ul>
      <a href="https://www.facebook.com/profile.php?id=61550194067161">
        <li class="facebook"><i class="fa-brands fa-facebook"></i></li>
      </a>
      <a href="https://www.instagram.com/seacareerconsultancy2/">
        <li class="instagram"><i class="fa-brands fa-instagram"></i></li>
      </a>
      <a href="">
        <li class="twitter"><i class="fa-brands fa-x-twitter"></i></li>
      </a>
      <a href="https://youtube.com/@SeaCareerConsultancy?si=DAOomw1YauCiY5v0">
        <li class="youtube"><i class="fa-brands fa-youtube"></i></li>
      </a>
      <a href="">
        <li class="phone"><i class="fa-solid fa-phone-volume "></i></li>
      </a>
    </ul>
  </div>
  <?php include "whatsapp.php"; ?>
  <?php include "footer.php"; ?>

  <!-- reload page  -->
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>



  <!-- custom js  -->
  <script src="./data/js/main.js"></script>

  <!-- iconions js  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- bootstrap js  -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>

<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
  $name = $_POST['cname'];
  $email = $_POST['cemail'];
  $mobile = $_POST['cmob'];
  $msg = $_POST['cmsg'];

  //Load Composer's autoloader
  require 'phpmailer/Exception.php';
  require 'phpmailer/PHPMailer.php';
  require 'phpmailer/SMTP.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'seacarrierconsultancy@gmail.com';                     //SMTP username
    $mail->Password   = 'nhjmyizqvcyvmhid';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('seacarrierconsultancy@gmail.com', 'Contact_form');
    $mail->addAddress('admin@seacareer.org', 'mail1');          //Add a recipient
    $mail->addAddress('seacarrierconsultancy@gmail.com', 'mail2');      //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Form Enquiry';
    $mail->Body    = "Name:$name  <br>
                      Email:$email <br>
                      Mobile:$mobile <br>
                      Message:$msg <br>";


    $mail->send();
    echo '<div class="alert alert-success" role="alert">
    Data send sucessfully
  </div>';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

?>