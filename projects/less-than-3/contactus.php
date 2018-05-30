<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="Less than 3 - Renno's Assignment">
  <meta name="keywords" content="renno riyadi website dating assignment dkit dundalk ireland">
  <meta name="author" content="Renno Riyadi">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Less than 3 - Contact Us</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />

</head>

<body>

    <div class="hero-contact">
      <div>
        <!-- KEEP THIS BLANK FOR FORMATTING -->
      <div>
    </div>

    <div class="navigation">
      <div class="container">
        <nav class="navbar navbar-toggleable-md navbar-light">

          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <a class="navbar-brand" href="index.html">Less than 3</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <a class="nav-link" href="brickmortar.php">Brick & Mortar</a>
              <a class="nav-link" href="aboutus.html">About Us</a>
              <a class="nav-link" href="contactus.php">Contact Us</a>
              <a class="nav-link nav-button" href="login.html">Your Account</a>
            </ul>
          </div>

        </nav>
      </div>
    </div>

    <div class="hero-content">
      <div class="container">

          <div class="content-index text-center wow fadeInUp">

            <div class="hero-h1">
              <p>Contact Us.</p>
              <p>Directly.</p>
            </div>

            <div class="hero-h2">
              <p>We’re here to help.</p>
            </div>

          </div>

      </div>
    </div>

    <div class"about-content">
      <div class="about-content-here container">

        <div class="text-center">
          <p class="about-h1">We here at Less than 3 believe in true and pure communication between the company and the users. Hence we will reply to any inquiries we received manually - no bots here! We hate them as much as you do!</p>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1 text-center">
              <p class="about-gray-h1">All inquiries we received will be manually checked once we received the ticket. Don’t have an inquiry but you want to talk to us about something? We’re all ears.</p>
            </div>
        </div>


                          <?php
                          $action=$_REQUEST['action'];
                          if ($action=="")
                              {
                              ?>

                              <form name="brickmortar-1" action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="submit">

                                <input name="name" type="text" placeholder="Your Name" required title="Your Name"/>

                                <div class="padding-form"></div>

                                <input name="email" type="email" placeholder="Your Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required title="Your Email Address Must Contain an @ Symbol and a Domain Name in the End"/>

                                <div class="padding-form"></div>

                                <textarea name="message" rows="7" cols="30" placeholder="Your Message" required title="Your Message"></textarea>

                                <div class="padding-form"></div>

                                <input name="brickmortar-1" class="contact-send" type="submit" value="Send Inquiry"/>

                              </form>

                              <?php
                              }
                          else
                              {
                              $name=$_REQUEST['name'];
                              $email=$_REQUEST['email'];
                              $message=$_REQUEST['message'];
                              if (($name=="")||($email=="")||($message==""))
                                  {
                                  echo "We noticed you did not complete the form completely. Please fill <a href=\"\">the form</a> again.";
                                  }
                              else{
                                  $from="From: $name<$email>\r\nReturn-path: $email";
                                  $subject="An Inquiry has been sent! - Contact";
                                  mail("d00188695@student.dkit.ie", $subject, $message, $from);
                                  echo '<span>Your Inquiry has been sent. Please wait for a member of our team to respond to your inquiry</span>';
                                  }
                              }
                          ?>

        <div class="small-contact text-center">
          <p>Your query will be replied in two or three working days.</p>
          <p>Need immidiate assistance? Ring us <a href="#">here</a>.</p>
        </div>


      </div>
    </div>



  <footer>
  <div class="footer-content container">
    <a href="index.html" class="footer-logo">Less than 3</a>

    <div class="footer-nav">
      <ul class="list-inline">
          <a class="list-inline-item" href="brickmortar.php">Brick & Mortar</a>
          <a class="list-inline-item" href="aboutus.html">About Us</a>
          <a class="list-inline-item" href="contactus.php">Contact Us</a>
          <a class="list-inline-item" href="login.html">Your Account</a>
      </ul>
    </div>

    <div class="footer-hook">
      <p>We are a group of people whom are passionate with true love.</p>
      <p>No frills, Less than 3</p>
    </div>

    <div class="footer-small-text">
      <p>Made with love by <a href="http://www.riyadirenno.com"> Renno Riyadi</a></p>
      <p>For Educational Purposes Only - <a href="https://www.dkit.ie"> Dundalk Institute of Technology</a>
    </div>
  <div>
</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min_.js"></script>
    <script>new WOW().init();</script>
    <script>
    $('a[href*="#"]').on('click', function (e) {
	    e.preventDefault();

	    $('html, body').animate({
		  scrollTop: $($(this).attr('href')).offset().top
	    }, 500, 'linear');
    });
  </script>
</body>

</html>
