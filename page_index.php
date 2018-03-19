<div class="body-content">
  <div class="container onepage">
    <div class="row quotes">
      <div style="text-align: left;" class="index-param col-sm-6">
        <blockquote>
          <h1><?php echo $LANG["quotes_title"]; ?></h1>
          <cite>
            <div>
              <p><?php echo $LANG["quotes_text"]; ?></p>
              <h3>
                <?php echo $LANG["quote_end"]; ?>
              </h3>
              </br>
              </br>
              <b>
                <a href="?page=who_story">
                <?php echo $LANG["story_link_label"]; ?>
                </a>
              </b>
            </div>
          </cite>
        </blockquote>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
        <img style="margin: 15px;" class="img-sepia" src="assets/imgs/index_bck.jpg" width="100%" />
      </div>
    </div>
    <div style="padding-top: inherit;" class="row quotes onepage">
      <?php include_once "./timeline.php"; ?>
      <a href="?page=who_story" style="width: 100%; text-align: center;">
        <?php echo $LANG["discover"]; ?>
      </a>
    </div>
    <div class="onepage quotes">
      <div class="row">
        <div class="col-sm-12">
          <h1><?php echo $LANG["stat-global-label"]; ?></h1>
        </div>
      </div>
      </br>
      </br>
      </br>
      <div class="row">
        <div class="col-md-4">
         <div class="circle">
           <svg class="circle_draw">
             <circle cx="50%" cy="50%" r="45%" fill="#98838f" />
             Sorry, your browser does not support inline SVG.  
           </svg> 
            <div class="circle_content">
              <div><?php echo $LANG["stat-amount-1"]; ?></div>
              <p><?php echo $LANG["stat-label-1"]; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
         <div class="circle">
           <svg class="circle_draw">
             <circle cx="50%" cy="50%" r="45%" fill="#98838f" />
             Sorry, your browser does not support inline SVG.  
           </svg> 
            <div class="circle_content">
              <div><?php echo $LANG["stat-amount-2"]; ?></div>
              <p><?php echo $LANG["stat-label-2"]; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
         <div class="circle">
           <svg class="circle_draw">
             <circle cx="50%" cy="50%" r="45%" fill="#98838f" />
             Sorry, your browser does not support inline SVG.  
           </svg> 
            <div class="circle_content">
              <div><?php echo $LANG["stat-amount-3"]; ?></div>
              <p><?php echo $LANG["stat-label-3"]; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row quotes onepage">
      <div class="col-sm-12">
        <h2><?php echo $LANG["partner_t1"]; ?></h2>
        <ul>
          <li class="partner"><?php echo $LANG["partner_0"]; ?></li>
        </ul>
        <h2><?php echo $LANG["partner_t2"]; ?></h2>
        <ul>
          <li class="partner"><?php echo $LANG["partner_1"]; ?></li>
          <li class="partner"><?php echo $LANG["partner_2"]; ?></li>
          <li class="partner"><?php echo $LANG["partner_3"]; ?></li>
        </ul>
      </div>
    </div>
    <div class="row quotes onepage" style="margin-bottom: 20vh" >
      <div class="col-sm-12">
        <h2>
          <?php echo $LANG["quotes_title_2"]; ?>       
        </h2>
      </div>
      <div class="col-sm-6">
        <p><?php echo $LANG["missions_body"]; ?></p>
              <b>
                <a href="?page=gi_donate">
                <?php echo $LANG["support"]; ?>
                </a>
              </b>
      </div>
      <div class="col-sm-5 img-show" style="margin-left: 15px">
        <div id="carousel" class="carousel carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-sepia d-block w-100" src="assets/imgs/slide1.jpg">
            </div>
            <div class="carousel-item">
              <img class="img-sepia d-block w-100" src="assets/imgs/slide2.jpg">
            </div>
            <div class="carousel-item">
              <img class="img-sepia d-block w-100" src="assets/imgs/slide3.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


