<div class="container body-content">
    <div class="container row body-content-part quotes">
        <div class="col-sm-12">
            <h2><?php echo $LANG["involved_title"] ?></h2>
        </div>
        <hr align="center" style="padding: 2em 2em" width="90%">
        <div class="container row">
            <div class="col-sm-8">
                    <h4 style="height:20%"><?php echo $LANG["involved_once_title"] ?></h4>
                    <p style="height:60%"><?php echo $LANG["involved_once_paypal"] ?></p>
                    <div style="height:10%; display: flex;">
                    <?php include './button_paypal.php' ?>
                    <?php include './button_paypal_subscribe.php' ?>
                    </div>
            </div>
            <div class="col-sm-4">
                    <h4 style="height:20%"><?php echo $LANG["involved_cheque_title"] ?></h4>
                    <p style="height:60%"><?php echo $LANG["involved_cheque"] ?></p>
                    <button style="height:21%" class="btn btn-outline-success my-2 my-sm-0">DOWNLOAD</button>
            </div>
        </div>
    </div>
</div>
