<?php
    $PAGES = array(
        "404" => "./page_404.php",
        "index" => "./page_index.php",
        "donate" => "./page_donate.php",
    )
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include './head.php';
        ?>
    </head>
    <body>
        <?php
            include './header.php';
        ?>
            <!--   -->
        <?php
            if (isset($_GET["page"]) && isset($PAGES[$_GET["page"]]))
                    require $PAGES[$_GET["page"]];
            else
                    require $PAGES["index"];
            ?>
            <!--   -->
            <?php
                include './foot.php';
            ?>
        </div>
        <?php
            include './footer.php';
        ?>
    </body>
</html>
