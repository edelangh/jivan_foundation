<!-- http://freefrontend.com/css-timelines/ -->
<div class="timeline-container" id="timeline-1">
  <h3 style="text-align: center; padding: 1em; margin: 1em 10%; width: 80%;">
      <?php echo $LANG["quote_end"]; ?>
  </h3>
  <div style="z-index: 1035; pointer-events: none;" class="timeline">
   <?php foreach ($LANG["timeline"] as $event) { ?>
    <div class="timeline-item" data-text="">
      <div class="timeline__content">
<!--        <img class="timeline__img img-sepia" src="<?php echo $event["img"]; ?>"/> -->
<!--        <h2 class="timeline__content-title"><?php echo $event["date"]; ?></h2> -->
	<p class="timeline__content-desc">
	        <h2><?php echo $event["date"]; ?></h2>
		<p><?php echo $event["desc"]; ?></p>
	</p>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<script src="./assets/js/timeline.js" type="text/javascript"></script>
