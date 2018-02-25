<?php
    $PAGES = array(
        "404" => "./page_404.php",
        "index" => "./page_index.php",
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
        <div id="main-page" class="container">
            <header>
                <?php
                    include './header.php';
                ?>
            </header>
            <!--   -->
            <?php
                if (isset($_GET["page"])) {
                    if (isset($PAGES[$_GET["pages"]]))
                        require $PAGES[$_GET["pages"]];
                    else
                        require $PAGES["404"];    
                }
                else
                    require $PAGES["index"];
            ?>
            <!--   -->
            <?php
                include './foot.php';
            ?>
        </div>
        <footer>
            <?php
                include './footer.php';
            ?>
        </footer>
    </body>
</html>