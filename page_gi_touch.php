
<div class="body-content">
  <div class="container onepage">
    <div class="row quotes">
      <div class="col-sm-8" style="text-align: center;">
        <form action="#">
	<h3 style="text-align: left;"><?php echo $LANG["dear"]; ?></h3>
        <textarea class="letter-bg" style="margin-top: 0px" id="mail-text-area" placeholder="Your message" autofocus></textarea>
        <input id="mail-mail-area" type="email" placeholder="<?php echo $LANG['your_mail']?>" ></input>
        <p></p>
        <button style="margin-bottom: 5em!important;text-transform:uppercase" class="btn btn-donate btn-outline-success my-2 my-sm-0" type="submit"><?= $LANG["send"]?></button>
        </form>
      </div>
      <div style="color: #98838f;" class="col-sm-4">
        <h3 style="padding-bottom: 1em"><?php echo $LANG["gi_contact"]; ?></h3>
        <p><?php echo $LANG["gi_touch"]; ?></p>
      </div>
    </div>
  </div>
</div>
