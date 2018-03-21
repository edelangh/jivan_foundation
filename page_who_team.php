<?php
    $TITLE = $LANG["who_team_title"];
?>

<div class="body-content">
  <div class="container onepage">
    <h2><?php echo $TITLE; ?></h2>
    <div style="padding-top: 1em" class="row quotes">
        <?php foreach (array("anita", "jeremie", "aslam") as $key => $name) { ?>
        <div style="text-align: left" class="col-sm-4 col-md-4 profile">
            <img class="img-sepia" align="center" src=<?php echo "assets/imgs/".$name."_crop.jpg";?>></img>
            <h3 class="title-name"><?php echo $LANG[$name."_name"] ?></h3>
	    <p class="description profile" style="margin-bottom: 10vh">
              <?php echo $LANG[$name."_desc"]; ?>
            </p>
        </div>
        <?php } ?>
    </div>
  </div>
</div>

