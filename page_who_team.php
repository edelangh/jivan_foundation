<?php
    $TITLE = $LANG["who_team_title"];
?>

<div class="container body-content">
    <h1><?php echo $TITLE; ?></h1>
    <hr align="center" width="90%">
    <div class="row quotes">
        <div class="col-sm-0 col-md-1"></div>
        <?php foreach (array("anita", "jeremie", "aslam") as $key => $name) { ?>
        <div style="text-align: left" class="col-sm-4 col-md-3">
        <img class="profile" src=<?php echo "assets/imgs/".$name."_crop.jpg";?>></img>
            <h4><?php echo $LANG[$name."_name"] ?></h4>
            <p><?php echo $LANG[$name."_desc"]; ?></p>
        </div>
        <?php } ?>
    </div>
</div>
<h4>Aslam ISLAMUDDIN</h5>

<!--            <p><?php echo $LANG["aslam_desc"]; ?></p>
            <h4>Jérémie ROMBAUT</h5>
            <p><?php echo $LANG["jeremie_desc"]; ?></p>
-->
