<?php require("includes/head.php");?>
<style>
.checkwx-container a{
  color: white;
}
</style>
<title>Tirana FIR</title>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <?php require("includes/navbar-spec.php");?>  
<!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/firs/laaa.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Albania</h2>
                <p>Kaleidoscopic cityscapea</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get sceneries</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/firs/laaa2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Albania</h2>
                <p>A quarter of a century after throwing off the shackles of communism, Albania's stunning mountain scenery, crumbling castles, boisterous capital and dreamy beaches rivalling any in the Mediterranean continue to enchant</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get sceneries</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/firs/laaa3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Tirana</h2>
                <p>Feasting your eyes on the wild colour schemes and experiencing Blloku cafe culture in the plucky Albanian capital</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get sceneries</a>
              </div>
            </div>
          </div>


          <div class="carousel-item">
            <div class="carousel-background"><img src="img/firs/laaa4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Tirana metar</h2>
                <h4><div class="checkwx-container" data-type="METAR" data-station="LATI"></div></h4>
                <a href="#featured-services" class="btn-get-started scrollto">Get sceneries</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="far fa-bookmark"></i>
            <h4 class="title"><a href="">ATC bookings</a></h4>
            <p class="description">Want to know when will we be online? Check ATC bookings</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="far fa-calendar-alt"></i>
            <h4 class="title"><a href="">Events</a></h4>
            <p class="description">Every week we are online as part of <em>Adriatic weekly</em>, but we also have planty other events.</p>
          </div>

          <div class="col-lg-4 box">
            <i class="far fa-comments"></i>
            <h4 class="title"><a href="">Give us feedback</a></h4>
            <p class="description">If you are pleased with our service or have any complains, let us know</p>
          </div>

        </div>
      </div>
    </section>  ============================--><!-- #featured-services -->
   
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
      
        <header class="section-header">
        <h3>Tirana FIR</h3>
        <div class="row">
        <div class="col-sm">
        <h4>General info</h4>
        <ul>
        <li><b>FIR director</b>: Filip Markoski</li>
        <li><b>Deputy director</b>: Dren Ahmeti</li>
        <li><b>Main airports</b>: Tirana (LATI)</li>
        </ul>
        </div>
        <div class="col-sm" align="center">
        <img src="img/firs/albania.jpg" alt="belgrade" style="width: 300px;"></img>
        </div>
        <div class="col-sm" >
        <h4>Tirana Airport</h4>
        <ul>
        <li><b>Full name</b>:  Tirana International Airport Nënë Tereza</li>
        <li><b>Location</b>:   It's located 11 kilometres northwest of Tirana, in the municipality of Krujë</li>
        <li><b>Usage</b>:  Largest international AD in Albania. Used for civil and military operations</li>
        </ul>
        </div>
        </div>
        </header>

        

      </div>
    </section><!-- #about -->


<!--
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
          -->
      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <?php require("includes/footer.php");?>
  
<!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
   <div id="preloader"></div> 

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="https://api.checkwx.com/widget?key=2dd29f370df03d622e5f7f5e99" type="text/javascript"></script>
</body>
</html>
