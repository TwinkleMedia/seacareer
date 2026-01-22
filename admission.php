<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preload" href="./data/js/main.js" as="script" />
  <title>Admission-Apply for courses Now at Sea Career Consultancy.</title>
  <meta name="description" content="Apply now for courses of your Maritime career wtih Sea career Consultancy & Training.">
  <link rel="canonical" href="https://seacareer.org/admission.php"/>
  <?php include './link.php';?>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>

</head>

<body>

  <?php include "header.php"; ?>
  <div class="about sectiontitle">
    <div class="container">
      <div class="row">
        <h1 class="aboutsection">Admission: Apply for courses</h1>
        <p class="topsection"><a href="index.php" class="innersection">Home &nbsp;</a>-<a href="admission.php" class="innersection"> &nbsp;Admission</a></p>
      </div>
    </div>
  </div>
  <div class="courses">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form class="row g-3 coursesinfo" method="post">
            <div class="col-md-12">
                <h2 class="apply-now">Apply Now for Our Courses</h2>
                <p>Welcome to the Sea Career Consultancy & Training, your Navi Mumbai’s premier maritime training center located at CBD Belapur. Here, aspiring seafarers can embark on a journey towards a rewarding career at sea. Our courses, including Electro-Technical Officer (ETO), MEO Class II, IMU CET, and GMA (Glassgow Maritime Academy), offer comprehensive training programs designed to equip you with the knowledge and skills necessary to excel in the maritime industry. Whether you're looking to advance your career or pursue a new opportunity, our expert instructors and state-of-the-art facilities provide the ideal environment for your growth and success. Apply today and take the first step towards a promising future on the open seas with Sea Career Consultancy & Training.</p>
              <label for="textname" class="form-label"><b>Name</b></label>
              <input type="text" class="form-control control" id="textname" placeholder="Enter Name Here" autocomplete="off" name="aname" required>
            </div>
            <div class="col-md-12">
              <label for="inputemail" class="form-label"><b>Email</b></label>
              <input type="email" class="form-control  control" id="inputemail" placeholder="Enter Email Here" autocomplete="off" name="aemail" required>
            </div>
            <div class="col-12">
              <label for="inputmobile" class="form-label"><b>Mobile</b></label>
              <input type="number" class="form-control control" id="inputmobile" placeholder="+91 1234566789" autocomplete="off" name="amob" required>
            </div>
            <div class="col-12">
              <label for="inputcity" class="form-label"><b>City</b></label>
              <input type="text" class="form-control control" id="inputcity" placeholder="Enter City Here " autocomplete="off" name="acity" required>
            </div>
            <div class="col-12">
              <label for="inputzip" class="form-label"><b>Zip Code</b></label>
              <input type="number" class="form-control control" id="inputzip" placeholder="Enter Zip Code" autocomplete="off" name="azip" required>
            </div>
            <div class="col-12">
              <label for="exampleFormControlTextarea2" class="form-label"><b>Gender</b></label>
              <select class="form-select choose" aria-label="Default select example" name="agender">
                <option value="Male" selected>Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="col-12">
              <label for="exampleFormControlTextarea1" class="form-label"><b>Apply For</b></label>
              <select class="form-select choose" aria-label="Default select example" name="acourse">
                <option value="MEO Class II" selected>MEO Class II</option>
                <option value="IMU CET">IMU CET</option>
                <option value="ETO">ETO </option>
                <option value="GMA">GMA</option>
              </select>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-outline-success buttonss" name="send">Submit</button> <br><br>
            </div>
          </form>
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



    
    <?php

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_POST['send'])) {
      $name = $_POST['aname'];
      $email = $_POST['aemail'];
      $mobile = $_POST['amob'];
      $city = $_POST['acity'];
      $zip = $_POST['azip'];
      $gender = $_POST['agender'];
      $course = $_POST['acourse'];

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
        $mail->setFrom('seacarrierconsultancy@gmail.com', 'Admission_form');
        $mail->addAddress('admin@seacareer.org', 'mail1');  //Add a recipient
        $mail->addAddress('seacarrierconsultancy@gmail.com', 'mail2');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Admission Form';
        $mail->Body    = "<b>Name:</b> &nbsp; $name  <br>
                     <b>Email:</b> $email <br>
                     <b>Mobile:</b> $mobile <br>
                      <b>City:</b> $city <br>
                     <b>Zip:</b> $zip <br>
                     <b>Gender:</b> $gender <br>
                     <b>Course Type:</b> $course <br>";


        $mail->send();
        echo '<div class="alert alert-success" role="alert">
    Data send sucessfully
  </div>';
      } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    }

    ?>




    <!-- custom js  -->
    <script src="./data/js/main.js"></script>

    <!-- iconions js  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>