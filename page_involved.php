<div class="container body-content">
    <div class="container row body-content-part quotes">
        <div class="col-sm-12">
            <h3><?php echo $LANG["involved_title"] ?></h3>
        </div>
        <div class="row col-12">
            <div class="col-sm-4">
                        <h4 class="row-sm-4-4"><?php echo $LANG["involved_once_title"] ?></h4>
            </div>
            <div class="col-sm-4">
                        <h4 class=""><?php echo $LANG["involved_monthly_title"] ?></h4>
            </div>
            <div class="col-sm-4">
                        <h4 class="row-sm-4-4"><?php echo $LANG["involved_partner_title"] ?></h4>
            </div>
            </div>
            <div class="row col-12">
            <div class="col-sm-4">
                        <p class="row-sm-4-4"><?php echo $LANG["involved_once_paypal"] ?></p>
            </div>
            <div class="col-sm-4">
                        <p class=""><?php echo $LANG["involved_monthly_paypal"] ?></p>
            </div>
            <div class="col-sm-4">
                        <p class="row-sm-4-4"><?php echo $LANG["involved_partner"] ?></p>
            </div>
          </div>
          <div class="row col-12">
            <div class="col-sm-4">
                    <?php include './button_paypal.php' ?>
            </div>
            <div class="col-sm-4">
                    <?php include './button_paypal.php' ?>
            </div>
            <div class="col-sm-4">
                    <button class="btn btn-outline-success my-2 my-sm-0">Mail</button>
            </div>
        </div>
    </div>
</div>
