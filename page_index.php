<div class="body-content">
  <div style="padding-top: 10vh; min-height: 80vh" class="container">

    <div class="row quotes">
      <div style="text-align: left;" class="index-param col-md-6 col-sm-12">
        <blockquote>
          <h1><?php echo $LANG["quotes_title"]; ?></h1>
          <cite>
            <div>
              <p><?php echo $LANG["quotes_text"]; ?></p>
              <h3 style="color: #98838f">
                <?php echo $LANG["quote_end"]; ?>
              </h3>
              <div style="text-align: right; width: 100%;">
                <bold style="line-height: 2.7;">Sophie Rombaut</bold>
              </div>
            </div>
          </cite>
        </blockquote>
      </div>
      <div class="col-sm-0 col-md-1"></div>
      <div  class="col-sm-12 col-md-5">
        <img class="main-img" src="assets/imgs/index_bck.jpg" />
      </div>
      <div class="col-sm-12" style="text-align: center">
        <img class="logo-index" src="assets/imgs/logo-index.png" />
      </div>
    </div>

    <div class="row quotes onepage-mob">
      <?php include_once "./timeline.php"; ?>
      <div style="width: 100%; text-align: center" class="blink">
        <a class="blink" href="?page=gi_do" style="text-align: center;"><?php echo $LANG["discover"]; ?></a>
      </div>
    </div>
    <div class="d-md-none" style="height: 20vh; width: 100%;"></div>
    <div class="spacer"></div>
  </div>
  <div class="container onepage-mob quotes">
    <div class="row">
      <div class="col-md-6 circle-row">
        <div class="circle-container">
        <div class="circle-bo circle-bo-1">
            <div class="circle circle-1">
              <div class="circle_content">
                <div><?php echo $LANG["stat-amount-1"]; ?></div>
                <p><?php echo $LANG["stat-label-1"]; ?></p>
              </div>
            </div>
          </div>
          <div class="circle-bo circle-bo-2">
            <div class="circle circle-2">
              <div class="circle_content">
                <div><?php echo $LANG["stat-amount-3"]; ?></div>
                <p><?php echo $LANG["stat-label-3"]; ?></p>
              </div>
            </div>
          </div>
          <div class="circle-bo circle-bo-3">
            <div class="circle circle-3">
              <div class="circle_content">
                <div><?php echo $LANG["stat-amount-2"]; ?></div>
                <p><?php echo $LANG["stat-label-2"]; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 cricle-align-right">
        <h2 class="cricle-align-right circle-header title"><?php echo $LANG["circle_title"]; ?></h2>
        <p class="cricle-align-right"><?php echo $LANG["circle"] ?></p>
        <div class="blink">
          <a style="line-height: 5;" class="blink" href="?page=who_story">
            <?php echo $LANG["read_our_story"]; ?>
          </a>
        </div>
      </div>
      <div class="col-sm-12 circle-title-bottom">
        <h3><?php echo $LANG["circle_title_bottom"]; ?></h3>
      </div>
    </div> <!-- end of row -->
  <div class="spacer"></div>
  </div>
  <div class="container onepage-mob">
    <div class="row quotes">
      <div class="col-md-5">
        <h2>
          <?php echo $LANG["today_need_help"]; ?>       
        </h2>
        <p style="text-align: left;"><?php echo $LANG["missions_body"]; ?></p>
        <div class="blink">
          <a style="line-height: 5;" class="blink" href="?page=gi_donate">
            <?php echo $LANG["support_us"]; ?>
          </a>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <div class="img-show">
	  <img class="img-sepia d-block w-100" src="assets/imgs/slide1.jpg">
          <!--
          <div style="float:right;" id="carousel" class="carousel carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
              </div>
              <div class="carousel-item">
                <img class="img-sepia d-block w-100" src="assets/imgs/slide2.jpg">
              </div>
              <div class="carousel-item">
                <img class="img-sepia d-block w-100" src="assets/imgs/slide3.jpg">
              </div>
            </div>
	  </div>
          -->
        </div>
      </div>
    </div>
    <div class="spacer"></div>
      <div class="row quotes onepage-mob">
        <div class="col-sm-6">
          <table class="partner">
            <tr>
              <!--<td><?php echo $LANG["partner_1"]; ?></td>-->
              <td><img style="width: 100%; height: 100%; padding: 20px" src="/assets/imgs/logo-swissair.png" /></td>
              <td><div><?php echo $LANG["partner_0"]; ?></div></td>
            </tr>
            <tr>
              <td><div><?php echo $LANG["partner_2"]; ?></div></td>
              <!--<td><?php echo $LANG["partner_3"]; ?></td>-->
              <td><img style="width: 100%; height: 100%; padding: 30px" src="/assets/imgs/logo-arthenia.png" /></td>
            </tr>
          </table>
        </div>
      <div class="d-sm-none d-md-block col-md-1">
      </div>
      <div class="col-sm-12 col-md-5">
        <h2>
          <?php echo $LANG["partner_title"]; ?>       
        </h2>
        <p style="text-align: left"><?php echo $LANG["partner_hand"]; ?></p>
        <div class="blink">
          <a style="line-height: 5" class="blink" href="?page=gi_touch"><?php echo $LANG["title_get_touch"]; ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
