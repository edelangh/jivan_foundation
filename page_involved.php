<div class="container body-content">
    <div class="container row body-content-part quotes">
        <div class="col-sm-12">
            <h2><?php echo $LANG["involved_title"] ?></h2>
        </div>
        <hr align="center" style="padding: 2em 2em" width="90%">
        <div class="container row">
            <div class="col-sm-4">
                    <h4 style="height:20%"><?php echo $LANG["involved_once_title"] ?></h4>
                    <p style="height:60%"><?php echo $LANG["involved_once_paypal"] ?></p>
                    <div style="height:10%">
                    <?php include './button_paypal.php' ?>
                    </div>
            </div>
            <div class="col-sm-4">
                    <h4 style="height:20%"><?php echo $LANG["involved_monthly_title"] ?></h4>
                    <p style="height:60%"><?php echo $LANG["involved_monthly_paypal"] ?></p>
                    <div style="height:10%">
                    <?php include './button_paypal.php' ?>
                    </div>
            </div>
            <div class="col-sm-4">
                    <h4 style="height:20%"><?php echo $LANG["involved_partner_title"] ?></h4>
                    <p style="height:60%"><?php echo $LANG["involved_partner"] ?></p>
                    <button style="height:21%" class="btn btn-outline-success my-2 my-sm-0">Mail</button>
            </div>
        </div>
    </div>
</div>
