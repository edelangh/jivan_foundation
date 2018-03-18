<?php
    $TITLE = $LANG["who_story_title"];
    $BODY = $LANG["who_story_body"];
?>

<div class="container body-content">
    <div class="row body-content-part quotes">
        <div class="col-sm-0 col-md-1"></div>
        <div style="text-align: left" class="col-sm-12 col-md-10">
            <h1><?php echo $TITLE; ?></h1>
	    <div class="sidebar-box sidebar-long">
              <p style="font-size: 1.2em" class="description">
                <?php echo $BODY; ?>
              </p>
              <p class="read-more"><a href="#" class="btn btn-donate btn-outline-success button">Read More</a></p>
            </div>
        </div>
    </div>
</div>
