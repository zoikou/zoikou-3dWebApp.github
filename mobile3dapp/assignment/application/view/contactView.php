<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">

     <!-- Lets have some fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

    <link rel='stylesheet' type='text/css' href='../css/x3dom.css'>
    <!-- make sure your custom.css rules overrides the x3dom.css rules by placing the x3dom.css above your custom.css file. -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.2.1.js" crossorigin="anonymous"></script>
    


    <title>Hello, world!</title>

  
  </head>
  <body>

      <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
          <!-- Brand -->
          <div class="logo">
            <a class="navbar-brand" href="#">
             <h1>Nintendo</h1>
            </a>
          </div>



          <!--Navbar Menu Icon-->
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse ">
              <span class="navbar-toggler-icon"></span>
          </button>


        <!--link Menu Icon to the links class navbar-collapse selector-->
        <div class= "collapse navbar-collapse">
          <!-- Links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link " href="../index.php" id="btnHOME">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php/about" id="btnABOUT">ABOUT</a>
            </li>
        
            <!-- Dropdown -->
            <li class="nav-item">
              <a class="nav-link" href="../index.php/models" id="btnCONTROLLERS" >CONTROLLERS</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" id="btnCONTACT">CONTACT</a>
              </li>
           </ul>
         </div>
      </nav>


    <br> <!--Temporary break until we style the template-->
          
  

  <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10082.165233329948!2d-0.12374048675537115!3d50.82113666307599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1524866116669" width="700" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
            2 Dorset Gardens
            <br>Brighton, UK BN2 1RL
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (+44) 7754739829
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a class="email" href="mailto:zoikou@outlook.com">zoikou@outlook.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send me a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-success" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    

    <br> <!--Temporary break until we style the template-->

    <nav class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline"></span>&copy 2018 Mobile Web 3D Applications/</span> <a class="align-baseline" href="../assets/Contents.zip">Download Contents</a> </p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
                  <a href="https://github.com/zoikou/zoikou-3dWebApp.github/tree/master/mobile3dapp/assignment"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
      </nav>


    <!-- Optional JavaScript -->
    
    <script src="../js/popper.min.js" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../js/fontawesome-all.min.js"></script>
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Include the x3dom JavaScript -->
    <script type='text/javascript' src='../js/x3dom.js'></script>
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>

  </body>
</html>
