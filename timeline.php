<!-- http://freefrontend.com/css-timelines/ -->
<div class="timeline-container" id="timeline-1">
  <div class="timeline">
   <?php foreach ($LANG["timeline"] as $event) { ?>
    <div class="timeline-item" data-text="">
      <div class="timeline__content">
<!--        <img class="timeline__img img-sepia" src="<?php echo $event["img"]; ?>"/> -->
<!--        <h2 class="timeline__content-title"><?php echo $event["date"]; ?></h2> -->
	<p class="timeline__content-desc">
	        <h2><?php echo $event["date"]; ?></h2>
		<?php echo $event["desc"]; ?>
	</p>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<script src="./assets/js/timeline.js" type="text/javascript"></script>
