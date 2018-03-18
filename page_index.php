
<div class="container body-content">
    <div style="padding-top: inherit;" class="row body-content-part quotes onepage">
      <div style="text-align: left;" class="index-param col-sm-6">
        <blockquote>
          <h1><?php echo $LANG["quotes_title"]; ?></h1>
		  <cite><div class="justify">
		    <?php echo $LANG["quotes_text"]; ?>
		    <h3>
		      <?php echo $LANG["quote_end"]; ?>
		    </h3>
                  </br>
                  </br>
                  <b><a href="?page=who_story">
                    <?php echo $LANG["story_link_label"]; ?>
		    </a></b>
		   </div></cite>
         </blockquote>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
        <img style="margin: 15px;" class="img-sepia" src="assets/imgs/index_bck.jpg" width="100%" />
      </div>
    </div>
    <div style="padding-top: inherit;" class="row quotes onepage">
      <?php include_once "./timeline.php"; ?>
    </div>
    <div class="row quotes onepage">
        <div class="col-sm-12">
            <h1><?php echo $LANG["stat-global-label"]; ?></h1>
        </div> 
        <div class="stat-row col-sm-4">
            <span><?php echo $LANG["stat-amount-1"]; ?></span>
            <p><?php echo $LANG["stat-label-1"]; ?></p>
        </div>
        <div class="stat-row col-sm-4">
            <span><?php echo $LANG["stat-amount-2"]; ?></span>
            <p><?php echo $LANG["stat-label-2"]; ?></p>
        </div>
        <div class="stat-row col-sm-4">
            <span><?php echo $LANG["stat-amount-3"]; ?></span>
            <p><?php echo $LANG["stat-label-3"]; ?></p>
        </div>
    </div>
    <br />
    <div class="row quotes onepage">
        <div class="col-sm-12">
        <h2 style="padding-bottom:2em;">
            <?php echo $LANG["quotes_title_2"]; ?>       
        </h2>
        </div>
        <div class="col-sm-6">
            <p><?php echo $LANG["missions_body"]; ?></p>
        </div>
	<div class="col-sm-1"><p></br></p></div>
        <div class="col-sm-5 img-show">
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
	<!--
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	-->
	</div>
        </div>
    </div>
    
</div>


