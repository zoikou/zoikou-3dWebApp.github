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
    <script type='text/javascript' src='../js/x3dom.js'></script>
    <script src="../js/getModelsandContents.js"></script>
    


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
              <a class="nav-link" href="#" id="btnCONTROLLERS" >CONTROLLERS</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../index.php/contact" id="btnCONTACT">CONTACT</a>
              </li>
           </ul>
         </div>
      </nav>


    <br> <!--Temporary break until we style the template-->
          
  

  <div class="container-fluid">

    <!--This is the content for Layout Div Tag "model" -->
    <div class="main_contents" id="models">
        <!--Row to hold two cards to hold 1) the X3D model and 2) the gallery-->
        <div class="row">
            <!-- X3D Model -->
           <div class = "col-sm-10">
               <div class="card text-left">
                  <div class="card-header">
                     <ul class="nav nav-tabs card-header-tabs">
                       <li class="nav-item">
                         <a id= "btnNES" class="nav-link active" href="#">NES</a>
                       </li>
                       <li class="nav-item">
                         <a id= "btnSNES" class="nav-link" href="#">SNES</a>
                       </li>
                       <li class="nav-item">
                         <a id= "btnGAMECUBE" class="nav-link" href="#">GAMECUBE</a>
                       </li>
                       <li class="nav-item">
                         <a id= "btnWII" class="nav-link" href="#">WII</a>
                       </li>
                     <!-- Dropdown nav-tab -->
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                           View
                         </a>
                         <div class="dropdown-menu">
                           <a class="dropdown-item" href="#">Front</a>
                           <a class="dropdown-item" href="#">Back</a>
                           <a class="dropdown-item" href="#">Side</a>
                           <a class="dropdown-item" href="#">Bottom</a>
                           <a class="dropdown-item" href="#">Top</a>
                         </div>
                       </li>
                     </ul>
                   </div>
                   <div class="card-body">
                    <div id="modelsX3D">
                     <div id="x3dModelTitle" class="card-title controllerText"></div>

                     <!-- Place the X3D code here -->
                      <div class="model3D"> 
                         <x3d> 
                           <scene>
                              <inline id="x3domUrl" nameSpaceName="model" mapDEFToID="true"></inline>
                           </scene> 
                         </x3d>    
                     </div> 
                     <div id="x3dCreationMethod" class="card-text controllerText"></div>
                   </div>   

                 </div>    
               </div>    
           </div>
   
           <!-- 3D image gallery -->
           <div class = "col-sm-2">
               <div class="card text-left">
                 <div class="card-header gallery-header"> 
                   3D Image Gallery
                 </div>
   
                 <div class="card-body gallery">
                         <div>
                                <img class=" img-thumbnail" src="../assets/images/gallery/game_cube.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
                        </div>
                       <div>
                                <img class=" img-thumbnail" src="../assets/images/gallery/n_es.png" onclick="openModal();currentSlide(2)" class="hover-shadow">
                       </div>
                       <div>
                                <img class="img-thumbnail" src="../assets/images/gallery/n_wii.png" onclick="openModal();currentSlide(3)" class="hover-shadow">
                       </div>
                      <div>
                                <img class="img-thumbnail" src="../assets/images/gallery/s_nes.png" onclick="openModal();currentSlide(4)" class="hover-shadow">
                      </div>
                  </div>              
               </div>  
           </div>
         </div>

         <!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="../assets/images/gallery/game_cube.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="../assets/images/gallery/n_es.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="../assets/images/gallery/n_wii.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="../assets/images/gallery/s_nes.png" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="img1.jpg" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="img2.jpg" onclick="currentSlide(2)" alt="Trolltunga">
    </div>

    <div class="column">
      <img class="demo" src="img3.jpg" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="img4.jpg" onclick="currentSlide(4)" alt="Lights">
    </div>
  </div>
</div>


         <!-- Row to hold the interaction panels -->
          <div id="interaction" class="row">
                <!-- Column for the camera view controls -->
                <div class="col-sm-4 d-flex align-items-stretch">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle controllersText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-4 d-flex align-items-stretch">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options dwdadegdfgfnfghfgxdfg</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4 d-flex align-items-stretch">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Default</a>
                                <a class="dropdown-item" href="#">Onmi On/Off</a>
                                <a class="dropdown-item" href="#">Target On/Off</a>
                                <a class="dropdown-item" href="#">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
          </div> <!-- End row for the interaction panels -->
           <!-- Row to hold one card to hold the nes descriptive text, etc.-->
         <div id="DescriptionCard" class="row">
           <div class="col-sm-12">
                       <div class="card">
                           <div class="card-body">
                             <div id="DescriptionTitle" class="card-title controllerText"></div>
                             <div id="Description" class="card-text controllerText"></div>
                                              
                           </div>
                       </div>
                   </div>
             </div>


    </div><!-- End model contents-->

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

    <script>
// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    <!-- Optional JavaScript -->
    
    <script src="../js/popper.min.js" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../js/fontawesome-all.min.js"></script>

    <!-- Include the x3dom JavaScript -->
    
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
    <!-- javaScript is usually put at the end to execute after the DOM is loaded -->
    <script type="text/javascript" src="../js/gallery_generator.js"></script>

  </body>
</html>
