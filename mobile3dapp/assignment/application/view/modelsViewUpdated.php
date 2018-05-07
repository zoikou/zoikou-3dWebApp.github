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
    <link rel="stylesheet" href="../css/gallery.css" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.2.1.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src='../js/x3dom.js'></script>
    <script src="../js/getModelsandContents.js"></script>
    <script src="../js/modelX3dActions.js"></script>
    


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
          <ul class="navbar-nav ml-auto" id="NavigationButtons">
            <li class="nav-item">
              <a class="nav-link" href="../index.php" id="btnHOME">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php/about" id="btnABOUT">ABOUT</a>
            </li>
        
            <!-- Dropdown -->
            <li class="nav-item">
              <a class="nav-link active" href="#" id="btnCONTROLLERS" >CONTROLLERS</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../index.php/contact" id="btnCONTACT">CONTACT</a>
              </li>
           </ul>
         </div>
      </nav>


    <br> <!--Temporary break until we style the template-->
          
  
  <!-- Page Content -->
  <div class="container-fluid">

    <!-- Page Heading/Breadcrumbs -->
      <div class="mt-4 mb-3" id="x3dModelTitle">></div> 
     

      <ol class="breadcrumb" id="X3DSelection">
        <li class="breadcrumb-item">
          <a id= "btnNES" class="breadcrumb-item active" href="#">NES</a>
        </li>
        <li class="breadcrumb-item">
          <a id= "btnSNES" class="breadcrumb-item" href="#">SNES</a>
        </li>
         <li class="breadcrumb-item">
          <a id= "btnGAMECUBE" class="breadcrumb-item" href="#">GAMECUBE</a>
        </li>
         <li class="breadcrumb-item">
          <a id= "btnWII" class="breadcrumb-item" href="#">WII</a>
        </li>
      </ol>

    <!--This is the content for Layout Div Tag "model" -->
    <div class="main_contents" id="models">
        <!--Row to hold two cards to hold 1) the X3D model and 2) the gallery-->
        <div class="row">
            <!-- X3D Model -->
           <div class = "col-lg-8">
          
                  
                  <div id="modelX3D">
                     
                     <!-- Place the X3D code here -->
                    
                         <x3d id="modelWire"> 
                           <scene>
                              <inline id="x3domUrl" nameSpaceName="model" mapDEFToID="true"></inline>
                           </scene> 
                         </x3d>    
                     
                     
                  </div>   

                   
                 
           </div>
   
           <!-- About Contents -->
           <div class = "col-lg-4">
            <div class="card-group">
               <div class="card text-left model-control">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item">
                              <a class="nav-link active" href="#" id="navbardrop" data-toggle="dropdown">Views</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                                                     
                          <a href="#" id= "defaultCamera" class="btn btn-success btn-responsive" onclick="resetView();">Reset View</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="nextView();">Next View</a>
                          
                        </div>
                </div>
                 <div class="card text-left model-control">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item">
                              <a class="nav-link active" href="#" id="navbardrop" data-toggle="dropdown">Render</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                                                     
                          <a href="#" class="btn btn-success btn-responsive" onclick="wireframeRender();">Wireframe</a>
                          
                        </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card text-left model-control">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          
                          <a href="#" class="btn btn-success btn-responsive" onclick="spin();">Spin</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="stopSpin();">Stop</a>
                          
                        </div>
               </div>
               <div class="card text-left model-control">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Lights On/Off</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          
                          <a href="#" class="btn btn-success btn-responsive" onclick="defaultLights();">HeadLight</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="omniLights();">Omni</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="spotLight();">Spot</a>
                        </div>
               </div>
             </div>
               <div id="DescriptionTitle" class="card-title controllerText"></div>
               <div id="Description" class="card-text controllerText"></div>
               <div id="x3dCreationMethod" class="card-text controllerText"></div>
          
           </div>
         </div>


        
           <!-- Row to hold the image gallery.-->
         <br>
         <h2>Image Gallery</h2>
         <div class="row">
           <div class="col-lg-3 col-sm-6 mb-4">
              <img class=" img-thumbnail" src="../assets/images/gallery/NES_Render.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
           </div>
           <div class="col-lg-3 col-sm-6 mb-4">
               <img class=" img-thumbnail" src="../assets/images/gallery/SNES_Render.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
           </div>
           <div class="col-lg-3 col-sm-6 mb-4">
              <img class="img-thumbnail" src="../assets/images/gallery/GAMECUBE_Render.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
           </div>
           <div class="col-lg-3 col-sm-6 mb-4">
              <img class="img-thumbnail" src="../assets/images/gallery/WII_Render.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
          </div>
        </div>
                 <!-- The Modal/Lightbox -->
        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="modal-content">

            <div class="mySlides">
              <div class="numbertext">1 / 4</div>
              <img src="../assets/images/gallery/NES_Render.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 4</div>
              <img src="../assets/images/gallery/SNES_Render.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 4</div>
              <img src="../assets/images/gallery/GAMECUBE_Render.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">4 / 4</div>
              <img src="../assets/images/gallery/WII_Render.jpg" style="width:100%">
            </div>

            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Caption text -->
            <div class="caption-container">
              <p id="caption"></p>
            </div>

            <!-- Thumbnail image controls -->
            <div class="row">
              <img class="demo col-md-3" src="../assets/images/gallery/n_es_s.png" onclick="currentSlide(1)" alt="Render Image of NES controller">
              <img class="demo col-md-3" src="../assets/images/gallery/s_nes_s.png" onclick="currentSlide(2)" alt="Render Image of SNES controller">
              <img class="demo col-md-3" src="../assets/images/gallery/game_cube_s.png" onclick="currentSlide(3)" alt="Render Image of GAMECUBE controller">
              <img class="demo col-md-3" src="../assets/images/gallery/n_wii_s.png" onclick="currentSlide(4)" alt="Render Image of WII controller">
            </div>

           
          </div>
        </div>


    </div><!-- End model contents-->

  </div><!-- End 3D App Contents-->   
    

    <br> <!--Temporary break until we style the template-->

    <nav class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline"></span>&copy 2018 Mobile Web 3D Applications/</span> <a class="align-baseline" href="../media/zippedModels.zip">Download Contents</a> </p>
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
    
    <script src="../js/popper.min.js" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../js/fontawesome-all.min.js"></script>
    <script src="../js/modalInteractions.js"></script>
  

    <!-- Include the x3dom JavaScript -->
    
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
    <!-- javaScript is usually put at the end to execute after the DOM is loaded -->
    <script type="text/javascript" src="../js/gallery_generator.js"></script>

  </body>
</html>
