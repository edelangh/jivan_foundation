<?php
    $TITLE = $LANG["who_team_title"];
?>

<div class="container body-content">
  <div style="padding-top: inherit;" class="row body-content-part quotes onepage">
    <h2><?php echo $TITLE; ?></h2>
    <div class="row quotes">
        <?php foreach (array("anita", "jeremie", "aslam") as $key => $name) { ?>
        <div style="text-align: left" class="col-sm-4 col-md-4 profile">
            <img class="img-sepia" align="center" src=<?php echo "assets/imgs/".$name."_crop.jpg";?>></img>
            <h3 class="title-name"><?php echo $LANG[$name."_name"] ?></h3>
	    <div class="sidebar-box">
	       <p class="description"><?php echo $LANG[$name."_desc"]; ?></p>
               <p class="read-more"><a href="#" class="btn btn-donate btn-outline-success button">Read More</a></p>
            </div>
        </div>
        <?php } ?>
    </div>
  </div>
</div>

