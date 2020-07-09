<?php require("includes/head.php");?>
<style>

@media only screen and (max-width: 600px) {
 
.table{
      display: block !important;
   overflow-x: auto !important;
   width: 100% !important;
}
}

</style>
<title>VATSIM Adria</title>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <?php require("includes/navbar.php");?>  
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
            <div class="carousel-background"><img src="img/intro-carousel/132.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are professional</h2>
                <p>We have a team of experience controllers that will provaide the best service for you at one of our 30+ airports</p>
                <a href="#featured-services" class="btn-get-started scrollto">Join us</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/scen.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Beuatiful sceneries</h2>
                <p>From mountain-surrounded Sarajevo to stunning coastal scenaries such as Tivat or Dubrovnik, you will enjoy for sure</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get sceneries</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/plane.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>More then 30 airports</h2>
                <p>You can choose one of our 30+ airports spread out through 7 FIRs, with ADR_CTR providing top-down coverage</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get sceneries</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/euroscope.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>ATC training</h2>
                <p>Our experienced controllers have already trained dozens of controller's who are among best on the network</p>
                <a href="#featured-services" class="btn-get-started scrollto">Start now</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/vfr.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>VFR flights</h2>
                <p>Traffic patterns or free flying, whatever you choose, our controllers will help you gain your flying experience</p>
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
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="far fa-bookmark"></i>
            <h4 class="title"><a href="#skills">ATC bookings</a></h4>
            <p class="description">Want to know when will we be online? Check ATC bookings</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="far fa-calendar-alt"></i>
            <h4 class="title"><a href="#portfolio">Events</a></h4>
            <p class="description">Every week we are online as part of <em>Adriatic weekly</em>, but we also have planty other events.</p>
          </div>

          <div class="col-lg-4 box">
            <i class="far fa-comments"></i>
            <h4 class="title"><a href="feedback.php">Give us feedback</a></h4>
            <p class="description">If you are pleased with our service or have any complains, let us know</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>We are the VATEUD division that covers 7 FIRs: Ljubljana (LJLA), Belgrade (LYBA), Zagreb (LDZO), Sarajevo (LQSB), Skopje (LWSS), Tirana (LAAA) and Kosovo (KFOR). Our team is made up of dozens of enthusiasts who will give you the best possible experience during your flight in our region. </p>
        </header>

        

      </div>
    </section><!-- #about -->


    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>BECOME AN AIR TRAFFIC CONTROLLER</h3>
        <p>If you want do discover the beuatiful world of aviation, this is the right place to start.</p>
        <a class="cta-btn" href="#">Start your training now</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
        
          <h3>ATC INFO</h3>
          <p>This is the list of the ATC stations that are online and ATC bookings</p>
        </header>

        <div class="skills-content" >
        <div class="row">
        <div class="col-sm" align="center">
        <h3>ATC stations online</h3>
        <table class="table">
                <tr>
                  <th>Position</th>
                  <th>Frequency</th>
            </tr>
          <?php
          require( "DataHandler.php" );
          use VATSIM\DataHandler;
          
          $DH = new DataHandler();
          $atc=array("LJLA_CTR","LJLA_I_CTR","LJLA_U_CTR","LJLJ_APP","LJLJ_GND","LJLJ_TWR","LJMB_APP","LJMB_TWR","LJPZ_APP","LJPZ_TWR","LYBA_A_CTR","LYBA_CTR","LYBA_N_CTR","LYBA_S_CTR","LYBE_APP",
          "LYBE_GND","LYBE_TWR","LYBT_APP","LYNI_APP","LYPG_APP","LYPG_TWR","LYTV_TWR","LYVR_APP","LYVR_TWR","LDDU_APP","LDDU_TWR","LDLO_APP","LDLO_TWR","LDOS_APP","LDOS_TWR","LDPL_APP","LDPL_TWR","LDRI_APP","LDRI_TWR","LDSB_APP",
          "LDSB_TWR","LDSP_APP","LDSP_TWR","LDZA_APP","LDZA_GND","LDZA_TWR","LDZD_APP","LDZD_TWR","LDZO_CTR","LDZO_E_CTR","LDZO_S_CTR","ADR_CTR","ADR_U_CTR","ADR_W_CTR","ADR_E_CTR","LQBK_APP","LQMO_APP","LQMO_TWR","LQSA_APP","LQSA_GND","LQSA_TWR","LQSB_CTR","LQSB_I_CTR","LQTZ_APP","LQTZ_TWR",
          "BKPR_APP","BKPR_TWR","LWSS_CTR","LWSK_APP","LWSK_TWR","LWOH_TWR","LAAA_CTR","LAGJ_TWR","LAKV_TWR","LATI_APP","LATI_TWR",
          "LJLA_T_CTR","LJLA_I_CTR","LJLA_U_CTR","LJLJ_T_APP","LJLJ_T_GND","LJLJ_T_TWR","LJMB_T_APP","LJMB_T_TWR","LJPZ_T_APP","LJPZ_T_TWR","LYBA_A_CTR","LYBA_T_CTR","LYBA_N_CTR","LYBA_S_CTR","LYBE_T_APP",
          "LYBE_T_GND","LYBE_T_TWR","LYBT_T_APP","LYNI_T_APP","LYPG_T_APP","LYPG_T_TWR","LYTV_T_TWR","LYVR_T_APP","LYVR_T_TWR","LDDU_T_APP","LDDU_T_TWR","LDLO_T_APP","LDLO_T_TWR","LDOS_T_APP","LDOS_T_TWR","LDPL_T_APP","LDPL_T_TWR","LDRI_T_APP","LDRI_T_TWR","LDSB_T_APP",
          "LDSB_T_TWR","LDSP_T_APP","LDSP_T_TWR","LDZA_T_APP","LDZA_T_GND","LDZA_T_TWR","LDZD_T_APP","LDZD_T_TWR","LDZO_T_CTR","LDZO_E_CTR","LDZO_S_CTR","ADR_T_CTR","ADR_U_CTR","ADR_W_CTR","ADR_E_CTR","LQBK_T_APP","LQMO_T_APP","LQMO_T_TWR","LQSA_T_APP","LQSA_T_GND","LQSA_T_TWR","LQSB_T_CTR","LQSB_I_CTR","LQTZ_T_APP","LQTZ_T_TWR",
          "BKPR_T_APP","BKPR_T_TWR","LWSS_T_CTR","LWSK_T_APP","LWSK_T_TWR","LWOH_T_TWR","LAAA_T_CTR","LAGJ_T_TWR","LAKV_T_TWR","LATI_T_APP","LATI_T_TWR");
          $br=count($atc);
          $k=0;
          foreach($DH->getAirTraffic() as $client){
             for($i=0;$i<=$br;$i++){
             
             if(($client->callsign)==$atc[$i]){
            $k=$k+1;
             ?><tr>
             <td><?php echo($client->callsign) ?></td>
             <td><?php print($client->frequency) ?></td>
             </tr><?php  
             }
             
             }
          }
          ?></table><?php
             if($k==0){
               ?>No ATC stations online<br><?php 
             } 
          ?>
          </div>
              <div class="col-sm new" style="align-content: center;">
              <h3 style="text-align: center;">ATC bookings for <?php echo date('d.m.Y.');?></h3>
              <table class="table" style="text-align: center;">
                <tr>
                  <th>Position</th>
                  <th>Date</th>
                  <th>Start time</th>
                  <th>End time</th>
            </tr>
              <?php
$xml_content = file_get_contents('http://vatbook.euroutepro.com/xml2.php');
$xml = simplexml_load_string($xml_content);
$m=0;
 foreach ($xml->atcs->booking as $book) {?>
    <tr><?php
      $position = $book->callsign;
      $datum = $book->time_start;
      $d=strtotime($datum);
      $s = $book->time_start;
      $start=strtotime($s);
      $e = $book->time_end;
      
      $day=date("d.m.Y.", $d);
      $dan=date('d.m.Y.');
      $end=strtotime($e);
      $atc=array("LJLA_CTR","LJLA_I_CTR","LJLA_U_CTR","LJLJ_APP","LJLJ_GND","LJLJ_TWR","LJMB_APP","LJMB_TWR","LJPZ_APP","LJPZ_TWR","LYBA_A_CTR","LYBA_CTR","LYBA_N_CTR","LYBA_S_CTR","LYBE_APP",
          "LYBE_GND","LYBE_TWR","LYBT_APP","LYNI_APP","LYPG_APP","LYPG_TWR","LYTV_TWR","LYVR_APP","LYVR_TWR","LDDU_APP","LDDU_TWR","LDLO_APP","LDLO_TWR","LDOS_APP","LDOS_TWR","LDPL_APP","LDPL_TWR","LDRI_APP","LDRI_TWR","LDSB_APP",
          "LDSB_TWR","LDSP_APP","LDSP_TWR","LDZA_APP","LDZA_GND","LDZA_TWR","LDZD_APP","LDZD_TWR","LDZO_CTR","LDZO_E_CTR","LDZO_S_CTR","ADR_CTR","ADR_U_CTR","ADR_W_CTR","ADR_E_CTR","LQBK_APP","LQMO_APP","LQMO_TWR","LQSA_APP","LQSA_GND","LQSA_TWR","LQSB_CTR","LQSB_I_CTR","LQTZ_APP","LQTZ_TWR",
          "BKPR_APP","BKPR_TWR","LWSS_CTR","LWSK_APP","LWSK_TWR","LWOH_TWR","LAAA_CTR","LAGJ_TWR","LAKV_TWR","LATI_APP","LATI_TWR");
          $br=count($atc);
        for($i=0;$i<=$br;$i++){     
      if(($position==$atc[$i]) && ($day==$dan)){
        $m=$m+1;
      echo "<td>".$position."</td>";
      echo "<td>".date("d.m.Y.", $d)."</td>";
      echo "<td>".date("H:i", $start). "z</td>";
      echo "<td>".date("H:i", $end)."z</td>";
      }}
      ?></tr><?php
    }

?>
     </table>
<?php if($m==0){
 echo " <div align='center'>
  <p>No ATC bookings for today<p>
</div>";
}?>
    <div align='center'>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
  All ATC bookings
</button>
  </div>
    </div>
  
    </div>

      </div>
    </section>
  <!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">List of all ATC bookings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <table class="table">
                <tr>
                  <th>Position</th>
                  <th>Date</th>
                  <th>Start time</th>
                  <th>End time</th>
            </tr>
              <?php
$xml_content = file_get_contents('http://vatbook.euroutepro.com/xml2.php');
$xml = simplexml_load_string($xml_content);
 foreach ($xml->atcs->booking as $book) {?>
    <tr><?php
      $position = $book->callsign;
      $datum = $book->time_start;
      $d=strtotime($datum);
      $s = $book->time_start;
      $start=strtotime($s);
      $e = $book->time_end;     
      $day=date("d.m.Y.", $d);
      $end=strtotime($e);
      $atc=array("LJLA_CTR","LJLA_I_CTR","LJLA_U_CTR","LJLJ_APP","LJLJ_GND","LJLJ_TWR","LJMB_APP","LJMB_TWR","LJPZ_APP","LJPZ_TWR","LYBA_A_CTR","LYBA_CTR","LYBA_N_CTR","LYBA_S_CTR","LYBE_APP",
          "LYBE_GND","LYBE_TWR","LYBT_APP","LYNI_APP","LYPG_APP","LYPG_TWR","LYTV_TWR","LYVR_APP","LYVR_TWR","LDDU_APP","LDDU_TWR","LDLO_APP","LDLO_TWR","LDOS_APP","LDOS_TWR","LDPL_APP","LDPL_TWR","LDRI_APP","LDRI_TWR","LDSB_APP",
          "LDSB_TWR","LDSP_APP","LDSP_TWR","LDZA_APP","LDZA_GND","LDZA_TWR","LDZD_APP","LDZD_TWR","LDZO_CTR","LDZO_E_CTR","LDZO_S_CTR","ADR_CTR","ADR_U_CTR","ADR_W_CTR","ADR_E_CTR","LQBK_APP","LQMO_APP","LQMO_TWR","LQSA_APP","LQSA_GND","LQSA_TWR","LQSB_CTR","LQSB_I_CTR","LQTZ_APP","LQTZ_TWR",
          "BKPR_APP","BKPR_TWR","LWSS_CTR","LWSK_APP","LWSK_TWR","LWOH_TWR","LAAA_CTR","LAGJ_TWR","LAKV_TWR","LATI_APP","LATI_TWR");
          $br=count($atc);
        for($i=0;$i<=$br;$i++){     
      if($position==$atc[$i]){
        $m=$m+1;
      echo "<td>".$position."</td>";
      echo "<td>".date("d.m.Y.", $d)."</td>";
      echo "<td>".date("H:i", $start). "z</td>";
      echo "<td>".date("H:i", $end)."z</td>";
      }}
      ?></tr><?php
    }

?>
     </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>We are rasing the bar every day and with every event</p>
        </header>

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">520</span>
            <p>Pilots</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">124</span>
            <p>Events</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10000</span>
            <p>Online hours</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Active members</p>
  				</div>

  			</div>

        <!--
        <div class="facts-img">
          <img src="img/facts-img.png" alt="" class="img-fluid">
        </div>-->

      </div>
    </section><!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Events</h3>
        </header>

        
        <div class="row portfolio-container">
        <div class="row">
        <?php
          $sql = 'SELECT * FROM events ORDER BY event_datum ASC';
          $q = mysqli_query($db,$sql);
          $result=mysqli_fetch_all($q,MYSQLI_ASSOC);
				$i=0;
				foreach($result as $row) {
					if($i<3){?>
                	<div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="login\<?php echo htmlspecialchars($row['event_slika']) ?>" class="img-fluid" alt="" style="height: 245px;">
                <a href="login\<?php echo htmlspecialchars($row['event_slika']) ?>" class="link-preview" data-lightbox="portfolio" data-title="" title="Preview"><i class="ion ion-eye"></i></a>
                <a class="link-details" title="More Details"><i class="ion ion-android-open" data-toggle="modal" data-target="#myModal-<?php echo $i;?>"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4><a href="#"><?php echo htmlspecialchars($row['ime']) ?> </a></h4>
                <p><?php echo htmlspecialchars($row['event_opis']) ?></p>

              </div>
            </div>
          </div>
          <div class="modal" id="myModal-<?php echo $i; // Displaying the increment ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo htmlspecialchars($row['ime']) ?> - <?php echo htmlspecialchars($row['event_datum'])  ?></h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <?php echo htmlspecialchars($row['opis_dugi']) ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
					<?php $i++;
				}else{
				break;
				}}?>
	            </div>
         
        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Contact us</h3>
        </header>

        <div class="row">
	            	<div class="col-12 col-lg-7 about-us-box wow fadeInLeft">
	                    <div class="about-us-box-text">
						<h3><strong>Come and say hello</strong></h3>
	<p>Here in VATSIM Adria we want all members to be able to communicate with eachother and share their passion for aviation.
	The perfect place for that is our discord server</p><br><br>
	<div style=" position: relative;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);">
	<a href="https://discord.gg/4qGHArd" class="btn btn-primary btn-link-1">Join us now</a>
	</div>
	                    </div>
	                </div>
	                <div class="col-12 col-lg-5 about-us-box wow fadeInUp">
	                	<div class="about-us-box-img" >      	
   <iframe src="https://discordapp.com/widget?id=572740040229388288&theme=dark"
	width="300" height="300" allowtransparency="true" frameborder="0"></iframe>
	                    </div>
	                </div>
	            </div>

      </div>
    </section><!-- #clients -->

  

    
    <!--==========================
      Contact Section
    
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>You can contact us through our offical discord server or via email</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
          <iframe src="https://discordapp.com/widget?id=572740040229388288&theme=dark"
	width="300" height="200" allowtransparency="true" frameborder="0"></iframe>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
            <i class="fab fa-discord"></i>
              <h3><a  href="https://discord.gg/4qGHArd">Join us now</h3>
              <p>Here in VATSIM Adria we want all members to be able to communicate with eachother and share their passion for aviation. The perfect place for that is our discord server.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
            <i class="fas fa-graduation-cap"></i>
              <h3>Start your training</h3>
              <p>We offer a great and fast ATC training. During training here, you will learn not just general things, but many local and special procedures.
             </p>
            </div>
          </div>

        </div>
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
    </section> <!-- #contact -->
    
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

</body>
</html>
