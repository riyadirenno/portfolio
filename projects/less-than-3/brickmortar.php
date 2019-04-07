<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="Less than 3 - Renno's Assignment">
  <meta name="keywords" content="renno riyadi website dating assignment dkit dundalk ireland">
  <meta name="author" content="Renno Riyadi">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Less than 3 - Brick & Mortar</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />

</head>

<body>

    <div class="hero-bam">
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
              <p>Brick & Mortar.</p>
              <p>Events Near You.</p>
            </div>

            <div class="hero-h2">
              <p>Only at Less than 3.</p>
            </div>

          </div>

      </div>
    </div>

    <div class"about-content">
      <div class="about-content-here container">
        <div class="text-center">
          <p class="about-h1">Brick & Mortar is an exclusive feature from Less than 3 which helps you find events that we think you would like! No registration required for inquiries.</p>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1 text-center">
              <p class="about-gray-h1">Brick & Mortar events is managed by Less than 3 and member’s that has been approved by the team. <a href="contactus.php">Send us an inquiry</a> to apply yourself to manage events at Brick & Mortar.</p>
            </div>
        </div>

        <div class="text-center">
          <p class="about-h1">Upcoming Events.</p>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
              <p class="about-dark-gray-h1">Here we have a list of upcoming events organized by Less than 3. All events in this section is available for members and non-members, however certain features are exclusive to registered members. All events listed has been approved by the moderating team from Less than 3.</p>
            </div>
        </div>

        <div class="container">
          <div class="row">
            <div id="event-1" class="col-xs-12 col-md-6 event-box">
              <div class="event-1">
              </div>
              <div class="event-text">
                <p class="event-title">Coffee at 2</p>
                <p class="event-whereabouts">December 1st at <a href="https://www.google.ie/maps/dir/''/clement+and+pekoe/data=!4m5!4m4!1m0!1m2!1m1!1s0x4867089ef78ba80f:0x140ae5efd0d0213?sa=X&ved=0ahUKEwj3g7bg9crXAhWBSxoKHYcoAkkQ9RcIhwEwDQ">Clement & Pekoe</a>, 2 PM</p>
                <p class="event-organize">Event Organized by <a href="login.html">Less than 3</a></p>
              </div>

              </div>


              <div id="event-2" class="col-xs-12 col-md-6 event-box">

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
                          $subject="An Inquiry has been sent! - Brick Mortar (Clement & Pekoe)";
                          mail("d00188695@student.dkit.ie", $subject, $message, $from);
                          echo '<span>Your Inquiry has been sent. Please wait for a member of event organizing team to respond to your inquiry.</span>';
                          }
                      }
                  ?>
                </div>
            </div>

            <div class="small-contact text-center">
              <p>Have an event that you would like to share with us?</p>
              <p><a href="login.html">Set up an account</a> to get started.</p>
            </div>


          </div>
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
