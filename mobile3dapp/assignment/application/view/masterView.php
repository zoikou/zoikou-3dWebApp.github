<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assignment/css/bootstrap.min.css" crossorigin="anonymous">

     <!-- Lets have some fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

    <link rel='stylesheet' type='text/css' href='../assignment/css/x3dom.css'>
    <!-- make sure your custom.css rules overrides the x3dom.css rules by placing the x3dom.css above your custom.css file. -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assignment/css/custom.css" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assignment/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
    <!-- JQuery code to get content data from a backend JSON file -->
    <script src="../assignment/js/getJsonData.js"></script>


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
              <a class="nav-link " href="#" id="btnHOME">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../assignment/index.php/about" id="btnABOUT">ABOUT</a>
            </li>
        
            <!-- Dropdown -->
            <li class="nav-item">
              <a class="nav-link" href="../assignment/index.php/models" id="btnCONTROLLERS" >CONTROLLERS</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../assignment/index.php/contact" id="btnCONTACT">CONTACT</a>
              </li>
           </ul>
         </div>
      </nav>


    <br> <!--Temporary break until we style the template-->
          
  

  <div class="container-fluid">
    
    <!--This is the main home page contents-->
    <div class="main_contents" id="home">
      <!--A row for the main 3D image theme- could make this a Jubotron with a carousel-->
      <div class="row">
        <div class = "col-sm-12">
          <div id="main_3d_image">
            <div id="main_text" class="col-xs-12 col-sm-4">
                <div id="title_home"></div>
                <div id="subTitle_home"></div>
            </div> 
          </div>
        </div>
      </div>

      
      <!-- A row to hold three cards for the Coke, Sprite and Pepper contents-->
      <div class="row">
              <div class="col-sm-6 d-flex align-items-stretch">
                <div class="card">
                  <a href="#">
                    <img class="card-img-top img-fluid img-thumbnail" src="assets/images/nes.jpg" alt = "Coca Cola">
                  </a>
                  <div class = "card-body d-flex flex-column">
                    <div id="title_NES" class="card-title homeText"></div>
                    <div id="description_NES" class="card-text homeText"></div>
                    <a href="http://nintendo.wikia.com/wiki/Nintendo_Entertainment_System_controller" class="btn btn-primary mt-auto p-2">Find out more</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-stretch">
                <div class="card">
                  <a href="#">
                    <img class="card-img-top img-fluid img-thumbnail" src="assets/images/snes.jpg" alt = "Coca Cola">
                  </a>
                  <div class = "card-body d-flex flex-column">
                    <div id="title_SNES" class="card-title homeText"></div>
                    <div id="description_SNES" class="card-text homeText"></div>
                    <a href="http://nintendo.wikia.com/wiki/Super_Nintendo_Entertainment_System_controller" class="btn btn-primary mt-auto p-2">Find out more</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-stretch">
                <div class="card">
                  <a href="#">
                    <img class="card-img-top img-fluid img-thumbnail" src="assets/images/GameCube.jpg" alt = "Coca Cola">
                  </a>
                  <div class = "card-body d-flex flex-column">
                    <div id="title_GAMECUBE" class="card-title homeText"></div>
                    <div id="description_GAMECUBE" class="card-text homeText"></div>
                    <a href="http://nintendo.wikia.com/wiki/Nintendo_GameCube_controller" class="btn btn-primary mt-auto p-2">Find out more</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-stretch">
                <div class="card">
                  <a href="#">
                    <img class="card-img-top img-fluid img-thumbnail" src="assets/images/wii.jpg" alt = "Coca Cola">
                  </a>
                  <div class = "card-body d-flex flex-column">
                    <div id="title_WII" class="card-title homeText"></div>
                    <div id="description_WII" class="card-text homeText"></div>
                    <a href="http://nintendo.wikia.com/wiki/Wii_Remote" class="btn btn-primary mt-auto p-2">Find out more</a>
                  </div>
                </div>
              </div>
      </div>
    </div> <!-- End home page contents-->


   


  </div><!-- End 3D App Contents-->   
    

    <br> <!--Temporary break until we style the template-->

    <nav class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline"></span>&copy 2018 Mobile Web 3D Applications </span></p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
                  <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
      </nav>


    <!-- Optional JavaScript -->
    
    <script src="../assignment/js/popper.min.js" crossorigin="anonymous"></script>
    <script src="../assignment/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../assignment/js/fontawesome-all.min.js"></script>

    <!-- Include the x3dom JavaScript -->
    <script type='text/javascript' src='../assignment/js/x3dom.js'></script>
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
    
  </body>
</html>
