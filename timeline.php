<h3 class="timeline-h3-1">
   <?php echo $LANG["timeline_title"]; ?>
</h3>
<p class="timeline-text-1" >
   <?php echo $LANG["timeline_p"]?>
</p>
<div style="margin-bottom: 5em; width: 100%; text-align: center" class="blink">
  <a class="blink" href="?page=who_story"><?php echo $LANG["timeline_cta"]; ?></a>
</div>
<div class="timeline-container" id="timeline-1">
   <div style="pointer-events: none;" class="timeline">
      <?php foreach ($LANG["timeline"] as $event) { ?>
        <div class="timeline-item" data-text="">
         <div class="timeline__content">
           <div class="img_container">
               <img class="timeline__img img-sepia" src="<?php echo $event["img"]; ?>"/>
           </div>
            <p class="timeline__content-desc">
                <h2><?php echo $event["date"]; ?></h2>
                <p class="center-mob"><?php echo $event["desc"]; ?></p>
            </p>
         </div>
        </div>
      <?php } ?>
   </div>
</div>
<script src="./assets/js/timeline.js" type="text/javascript"></script>
