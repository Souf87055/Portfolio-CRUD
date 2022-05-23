<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Soufiane Tarifit Portfolio</title>
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'><link rel="stylesheet" href="../css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- HEAD -->
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Soufiane Tarifit - Software Engineer, Web Developer</title>

    <!-- FONT-AWESOME CSS REF -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  </head>
  
  <!-- MAIN BODY -->
  
  <body data-spy="scroll" data-target=".navbar-collapse">
    
    <!-- NAVBAR -->
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        
        <!-- NAVBAR HEADER -->
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#home">Soufiane Tarifit</a>
        </div>

        <!-- NAVBAR LINKS - COLLAPSABLE -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#services">Vaardigheden</a></li>
            <li><a href="#portfolio">Projecten</a></li>
            <li><a href="#connect">Contact</a></li>
            <li><a href="../index.html">Log uit</a></li>
          </ul>
        </div>
        
      </div> <!-- .container -->
      
    </nav>
    
    <!-- END NAVBAR -->
    
    <!-- HOME SECTION -->
    
    <div id="home" class="container mt-content-container mt-top-container-home">
      
      <!-- INTRODUCTION AND MAIN HEADING -->
      <div class="row mt-top-row-home-white">
        
        <div class="col-md-8 col-md-offset-2">
          <p class="lead mt-padding-top">Hallo, mijn naam is Soufiane Tarifit en ik ben een</p>
          <h1>FULL STACK WEB DEVELOPER</h1>
          <div class="mt-block-line"></div>          
        </div>

      </div> <!-- .row -->
      
      <!-- SUB HEADING AND TAG LINE -->
      <div class="row mt-sub-head-white text-center">
        <div class="col-md-6 col-md-offset-3">
          <p class="lead">Ik ben een Software Developer in opleiding nog en ik heb een grote passie voor Software Development</p>
        </div>
        
      </div> <!-- .row -->

      <!-- NAV DOWN - NEXT SECTION -->
      <div class="row mt-nav-next-white">
      
        <div class="col-md-12">      
          <div class="mt-scroll-down-link">
            <a href="#services" alt="Scroll Next">
              <span class="fa fa-angle-double-down"></span>
            </a>        
          </div>
        </div> 
        
      </div> <!-- .row -->
          
    </div> <!-- .container -->
    
    <!-- END HOME -->
    
    <!-- SERVICES -->
    
    <div id="services" class="container-fluid mt-content-container mt-container-services">
      
      <div class="row mt-top-row text-white">
        
        <div class="col-md-4 col-md-offset-4">
          <h1>WHAT I DO</h1>
          <div class="mt-block-line"></div>
          <p class="lead">Dit zijn de vaardigheden die ik kan bieden om u te helpen bij het bouwen en implementeren van uw webtoepassing
    <p>          
       </div>
 
      </div> <!-- .row -->
      
      <!-- SERVICE THUMBNAILS -->

      <div class="row mt-service-thumb-row">
        

        <div class="col-md-6">
          <a href="#services" alt="Web Programming">            
            <div class="thumbnail mt-service-thumb">
              <div class="caption mt-service-thumb-text">
                <span class="fa fa-code fa-5x"></span>
                <h3>Web Programming</h3>
                <p>Ik kan u helpen bij het bouwen van uw webapplicaties met behulp van technologieën zoals HTML, CSS, Javascript, Bootstrap, PHP, en MySQL</p>
              </div>
            </div>
          </a>   
        </div>
  
     
        
        <div class="col-md-6">
          <a href="#services" alt="Development Process">
            <div class="thumbnail mt-service-thumb">
              <div class="caption mt-service-thumb-text">
                <span class="fa fa-puzzle-piece fa-5x"></span>
                <h3>Development Process</h3>
                <p>Ik heb ervaring bij het organiseren van projecten in Agile SDLC methodologies zoals SCRUM en Sprint</p>
              </div>
            </div>
          </a>
        </div>
      </div> <!-- .row -->
      
      <!-- END SERVICE THUMBNAILS -->
      
    </div> <!-- .container -->
    
    <!-- END SERVICES -->
    
    <!-- PORTFOLIO -->
    
    <div id="portfolio" class="container mt-content-container mt-container-portfolio">
      
      <!-- HEADER -->
      <div class="row mt-top-row-white text-muted">
        
        <div class="col-md-6 col-md-offset-3">
          <h1>MY PROJECTS</h1>
          <div class="mt-block-line"></div>
          <p class="lead">Hier een paar voorbeelden van mijn werk</p>        
        </div>
        
      </div> <!-- .row -->
      
      <!-- PORTFOLIO THUMBNAILS -->
      <div class="row mt-portfolio-thumb-row">
        
      
           
            <div class="caption mt-portfolio-thumb-text">
           <section><?php

      include "dbconfig.php";
    $sql = "SELECT naam, afbeelding, omschrijving, link FROM Projecten";
    $result = $con->query($sql);
    

    if ($result->num_rows > 0) {
    // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<br>  ". $row["naam"]. " <br> " . "<img class='phpimage' src='../phpimages/".$row["afbeelding"]."'><br>'" . " <br> " . $row["omschrijving"] ."  <a href='".$row["link"]."'>Website Link </a><br>";
      }
    } else {
      echo "0 results";
    }

    $con->close();
    ?> 
          </section>
            </div>
          </div>        


        
            


      </div> <!-- END PORTFOLIO THUMBNAILS -->
      
    </div> <!-- .container -->
    
    <!-- END PORTFOLIO -->
    
    <!-- CONNECT -->
    
    <div id="connect" class="container-fluid mt-content-container mt-container-connect">

      <div class="row mt-top-row text-white">
        
       <!-- HEADER -->
        <div class="col-md-6 col-md-offset-3">
          <h1>CONNECT WITH ME</h1>
          <div class="mt-block-line"></div>
        </div>
        
      </div> <!-- .row -->
      
      <!-- SOCIAL MEDIA AND CONTACT FORM OUTER ROW -->
      <div class="row">
        
        <!-- SOCIAL LINKS COLUMN -->
        <div class="col-md-6 center">
          
          <p class="lead">Maak contact met mij op deze sociale-mediasites</p>
          
          <div class="row">
            
            <div class="col-md-4 col-md-offset-2 mt-social-links">
              <a href="https://www.linkedin.com/in/soufiane-tarifit-6233081b7/" target="_blank" alt="LinkedIn">
                <i class="fa fa-linkedin-square fa-fw fa-5x mt-fa-social"></i><br>LinkedIn
              </a>              
            </div>
            
            <div class="col-md-4 mt-social-links" >
              <a href="https://github.com/Souf87055" target="_blank" alt="GitHub">
                <i class="fa fa-github-square fa-fw fa-5x mt-fa-social"></i><br>GitHub
              </a>              
            </div>

          </div> <!-- .row -->
                                    
          <div class="row mt-social-links-row">
            
       

          </div> <!-- .row -->

        </div> <!-- end social links column -->
        

        <!-- CONTACT FORM COLUMN -->
        
        <div class="col-md-6 center">
          
          <p class="lead">Laat me alsjeblieft weten hoe ik je kan helpen met je project </p>          
          
          <div class="row mt-connect-form-row">
            
            <div class="col-md-8 col-md-offset-2">
              <form name="connect-form" method="post">			
                      
                <!-- NAME -->
                <div class="form-group">
                  <input name="name" value="" type="text" class="form-control" placeholder="YOUR NAME *"/>
                </div>
                
                <!-- EMAIL -->
                <div class="form-group">
                  <input name="email" value="" type="email" class="form-control" placeholder="YOUR EMAIL *"/>
                </div>
                
                <!-- MESSAGE BODY -->
                <div class="form-group">
                  <textarea name="message" class="form-control" rows="5" placeholder="YOUR MESSAGE *"></textarea>
                </div>
                
                <!-- SEND MESSAGE BUTTON -->
                <div class="form-group">
                  <button id="send-message" name="connect" class="btn btn-default btn-lg"><i class="fa fa-envelope fa-fw mt-fa-button"></i> SEND MESSAGE</buton>
                </div>
                
              </form>              
            </div>
          
          </div> <!-- .row -->
          
        </div> <!-- end contact form column -->
      
      </div> <!-- .row -->
  
      <!-- FOOTER -->
      <div class="row mt-copyright-row">
          <p class="mt-copyright text-muted">Copyright &copy; Soufiane Tarifit, LLC 2022. All Rights Reserved</p>
      </div> <!-- .row -->
    
    </div> <!-- .container -->
    
    <!-- END CONNECT -->
    
    <!-- TOP NAV-->
      <div class="mt-scroll-up-link">
        <a href="#home" alt="Scroll Top">
          <span class="fa fa-angle-double-up"></span>
        </a>        
      </div>
  </body>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script><script  src="../js/script.js"></script>

</body>
</html>

